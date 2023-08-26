<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function newdepartment(){
        return view('newdepartment');
    }

    public function savedeparment(Request $request){

    }
}
