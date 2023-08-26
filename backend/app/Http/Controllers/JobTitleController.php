<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobTitles;
use App\Models\Departments;

class JobTitleController extends Controller
{
    public function jobtitles(){
        $departments = Departments::orderBy('id', 'desc')->get();
        $jobtitles = JobTitles::orderBy('id', 'desc')->paginate(10);
        return view('jobtitles', ['departments' => $departments, 'jobtitles' => $jobtitles]);
    }

    public function savejobtitle(Request $request){
        $data = [
            'description' => $request->input('jobtitle'),
            'fk_department' => $request->input('department'),
            'created_by' => auth()->user()->id,
            'created_at' => now(),
            'is_active' => 1
        ];

        // $data['description'] = $request->input('description');
        // $data['fk_department'] = $request->input('department');
        // $data['created_by'] = auth()->user()->id;
        // $data['created_at'] = now();

        $save = JobTitles::insert([$data]);

        if($save){
            return redirect('/jobtitles')->with('message', 'Job Title created');
        }else{
            return redirect('/jobtitles')->with('message', 'Failed to create Job Title');
        }
    }
}
