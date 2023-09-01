<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Permission;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
    public function permissions(){
        $data = Permission::orderBy('id', 'desc')->get();
        $rules = DB::table('users')
                        ->join('permissions', 'users.permission', '=', 'permissions.id')
                        ->where('users.id', '=', auth()->user()->id)
                        ->select('permissions.*')
                        ->get();
        return view('permissions', [
            'permissions' => $data,
            'rules' => $rules
        ]);
    }

    public function new(){
        $rules = DB::table('users')
                        ->join('permissions', 'users.permission', '=', 'permissions.id')
                        ->where('users.id', '=', auth()->user()->id)
                        ->select('permissions.*')
                        ->get();
        return view('new_permission', ['rules' => $rules]);
    }

    public function save(Request $request){
        $data = [
            'description' => $request->input('description'),
            'status' => 1,
            'view_all_tickets' => $request->input('view_all_tickets'),
            'view_my_tickets' => $request->input('view_my_tickets'),
            'view_new_tickets' => $request->input('view_new_tickets'),
            'view_open_tickets' => $request->input('view_open_tickets'),
            'view_resolved_tickets' => $request->input('view_resolved_tickets'),
            'view_closed_tickets' => $request->input('view_closed_tickets'),
            'view_cancelled_tickets' => $request->input('view_cancelled_tickets'),
            'add_tickets' => $request->input('add_tickets'),
            'close_tickets' => $request->input('close_tickets'),
            'cancel_tickets' => $request->input('cancel_tickets'),
            'view_users' => $request->input('view_users'),
            'create_users' => $request->input('create_users'),
            'update_users' => $request->input('update_users'),
            'disable_users' => $request->input('disable_users'),
            'view_departments' => $request->input('view_departments'),
            'create_departments' => $request->input('create_departments'),
            'update_departments' => $request->input('update_departments'),
            'disable_departments' => $request->input('disable_departments'),
            'view_job_titles' => $request->input('view_job_titles'),
            'create_job_titles' => $request->input('create_job_titles'),
            'update_job_titles' => $request->input('update_job_titles'),
            'disable_job_titles' => $request->input('disable_job_titles'),
            'view_permissions' => $request->input('view_permissions'),
            'create_permissions' => $request->input('create_permissions'),
            'update_permissions' => $request->input('update_permissions'),
            'disable_permissions' => $request->input('disable_permissions'),
            'created_by' => auth()->user()->id
        ];
        $save = Permission::insert($data);

        if($save){
            return redirect()->intended('/permissions')->with('message', 'New permission added');
        }else{
            return redirect()->intended('/permissions')->with('message', 'Failed to save new permission');
        }
    }
}
