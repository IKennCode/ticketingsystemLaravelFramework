<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logs;
use Illuminate\Contracts\Validation\Rule;

class UserController extends Controller
{
    // DISPLAY SAMPLE USERS TABLE
    public function users(){
        $data = User::orderBy('id', 'desc')->get();
        return view('users', ['users' => $data]);
    }

    public function newuser(){
        return view('new_user');
    }

    public function add(Request $request){
        $validated = $request->validate([
            'first_name' => ['required', 'min:2'],
            'middle_name' => ['min:2'],
            'last_name' => ['required', 'min:2'],
            'birthdate' => ['required'],
            'gender' => ['required'],
            'marital_status' => ['required'],
            'department' => ['required'],
            'job_title' => ['required'],
            'hired_at' => ['required'],
            'permission' => ['required'],
            'username' => ['min:3'],
            'password' => ['min:6'],
            'status' => ['min:1'],
            'created_at' => ['min:1']
        ]);

        $firstname = strtoupper($validated['first_name']);
        $middlename = strtoupper($validated['middle_name']);
        $lastname = strtoupper($validated['last_name']);
        $validated['username'] = strtoupper(ucfirst($firstname[0]) . ucfirst($middlename[0]) . $lastname);
        $validated['password'] = Hash::make('password');
        $validated['status'] = 1;
        $validated['created_at'] = now();

        $created = User::insert($validated);
        
        if($created){
            $creator = '1';
            $logs = ([
                'user' => ['min:1'],
                'description' => ['min:1'],
                'created_at' => ['min:1']
            ]);
            $logs['user'] = $creator;
            $logs['description'] = $creator . ' created an account for ' . $firstname . ' ' . $middlename . ' ' . $lastname;
            $logs['created_at'] = now();
            Logs::insert($logs);
            return redirect('/users/newuser')
                ->with('error', 'New user created');
        }else{
            return redirect('/users/newuser')
                ->with('error', 'Error saving record');
        }
    }
}

?>