<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobTitles;
use App\Models\Departments;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class JobTitleController extends Controller
{
    public function jobtitles(){
        $departments = Departments::orderBy('id', 'desc')->get();
        $jobtitles = JobTitles::orderBy('id', 'desc')->paginate(10);
        $rules = DB::table('users')
                        ->join('permissions', 'users.permission', '=', 'permissions.id')
                        ->where('users.id', '=', auth()->user()->id)
                        ->select('permissions.*')
                        ->get();
        
        return view('jobtitles', [
            'departments' => $departments,
            'jobtitles' => $jobtitles,
            'rules' => $rules
        ]);
    }

    public function savejobtitle(Request $request){
        $data = [
            'description' => $request->input('jobtitle'),
            'fk_department' => $request->input('department'),
            'created_by' => auth()->user()->id,
            'created_at' => now(),
            'is_active' => 1
        ];

        $save = JobTitles::insert([$data]);

        if($save){
            return redirect('/jobtitles')->with('message', 'Job Title created');
        }else{
            return redirect('/jobtitles')->with('message', 'Failed to create Job Title');
        }
    }
}
