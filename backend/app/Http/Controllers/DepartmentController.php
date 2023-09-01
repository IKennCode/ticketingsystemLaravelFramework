<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departments;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function departments(){
        $data = Departments::orderBy('id', 'desc')->paginate(10);

        $rules = DB::table('users')
                        ->join('permissions', 'users.permission', '=', 'permissions.id')
                        ->where('users.id', '=', auth()->user()->id)
                        ->select('permissions.*')
                        ->get();
        return view('departments', ['departments' => $data, 'rules' => $rules]);
    }

    public function savedepartment(Request $request){
        $department_name = $request->input('department_name');
        $create_at = now();
        $save = Departments::insert(['description' => $department_name]);

        if($save){
            return redirect('/departments')->with('message', 'Department created');
        }else{
            return redirect('/departments')->with('message', 'Failed to create Department');
        }
    }
}
