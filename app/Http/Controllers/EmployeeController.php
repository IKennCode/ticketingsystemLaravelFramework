<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index(){
        // $data = Employees::all();
        // $data = DB::table('employees')->select(DB::raw('AVG(age) as age_count, gender'))->groupby('gender')->get();
        // $data = Employees::where('id', 100)->firstOrFail()->get();
        // return view('employees.index', ['employees' => $data]);
        return view('employees.index');
    }

    public function show($id){
        $data = Employees::findOrFail()->get();
        return view('employees.index', ['employees' => $data]);
    }
}
