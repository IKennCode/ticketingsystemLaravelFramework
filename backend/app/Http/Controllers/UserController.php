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

<<<<<<< HEAD
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
=======
    
    public function newuser(){
        return view('new_user');
    }

    public function add(Request $request){
        $validated = $request->validate([
            'first_name' => ['required', 'min:2'],
            'middle_name' => ['required', 'min:2'],
            'last_name' => ['required', 'min:2'],
            'birthdate' => ['required'],
            'gender' => ['required'],
            'marital_status' => ['required'],
            'department' => ['required'],
            'position' => ['required'],
            'hired_at' => ['required'],
            'permission' => ['required'],
            'username' => ['required', 'min:4'],
            'password' => 'required|confirmed|min:6',
            'status' => ['required'],
        ]);

        $validated['password'] = Hash::make($validated['password']);
>>>>>>> 10754928045cb93a485c5d113b560eaf01875fcb

        $user = User::create($validated);

        return $user;
    }

    // DISPLAY SAMPLE USERS TABLE
    public function users(){
        $users = User::all();

        return response()->json($users);
    }
}

?>