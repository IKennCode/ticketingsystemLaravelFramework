<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'username' => 'required|string|exists:users,username',
            'password' => 'required|min:6|max:45|confirmed'
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        } else {
            return back()->with('error', 'Username / Password is incorrect!');
        }
    }

    public function newuser(){
        return view('new_user');
    }

    public function add(Request $request){
        // dd($request);
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
            'username' => ['required'],
            'password' => ['min:6'],
            'is_active' => ['min:1']
        ]);

        // dd($validated);
        $validated['password'] = Hash::make('password');
        $validated['is_active'] = 1;

        // $validated['first_name'] = $request->input('first_name');
        // dd($validated);
        $created = User::insert($validated);
        
        if($created){
            return redirect('/users/newuser')
                ->with('error', 'New user created');
        }else{
            return redirect('/users/newuser')
                ->with('error', 'Error saving record');
        }
    }

    // DISPLAY SAMPLE USERS TABLE
    public function users(){
        $users = User::all();

        return response()->json($users);
    }
}

?>