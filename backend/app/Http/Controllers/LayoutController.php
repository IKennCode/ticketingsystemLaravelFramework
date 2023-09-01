<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LayoutController extends Controller
{
    public function layout(){
        $permission = DB::table('users')
                        ->join('permissions', 'users.permission', '=', 'permissions.id')
                        ->where('users.id', '=', auth()->user()->id)
                        ->select('permissions.*')
                        ->get();
        return view('layouts.app', ['permission' => $permission]);
    }
}
