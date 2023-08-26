<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departments;

class DepartmentController extends Controller
{
    public function departments(){
        $data = Departments::orderBy('id', 'desc')->paginate(10);
        return view('departments', ['departments' => $data]);
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
