<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Permission;

class PermissionController extends Controller
{
    public function permissions(){
        $data = Permission::orderBy('id', 'desc')->get();
        return view('permissions', ['permissions' => $data]);
    }

    public function save(Request $request){
        $data = [
            'description' => $request->input('description'),
            'status' => 1
        ];
        $save = Permission::insert($data);

        if($save){
            return redirect()->intended('/permissions')->with('message', 'New permission added');
        }else{
            return redirect()->intended('/permissions')->with('message', 'Failed to save new permission');
        }
    }
}
