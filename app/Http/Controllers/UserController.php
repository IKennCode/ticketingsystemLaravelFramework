<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return 'This is from the controller';
    }

    public function login(){
        if(View::exists('user.login')){
            return view('user.login');
        }else{
            return abort(404);
        }
        
    }

    public function loginprocess(Request $request){
        $validate = $request->validate([
            "username" => ['required', 'min: 4'],
            "password" => 'required'
        ]);

        if(auth()->attempt($validate)){
            $request->session()->regenerate();
            return redirect('/home')->with("Message", "Logged In");
        }else{
            return back()->withErrors(['username' => 'Login Failed'])->onlyInput('email');
        }
    }

    public function home(){
        $data = User::all();
        return view('user.home', $data);
    }

    

    public function newuser(){
        return view('user.newuser');
    }

    public function register_user(Request $request){
        $validated = $request->validate([
            "name" => ['required', 'min: 4'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "username" => ['required', 'min: 4', Rule::unique('users', 'username')],
            "password" => 'required|confirmed|min:4',
            "user_type" => 'required',
            "is_active" => 'required'
        ]);

        $validated['password'] = bcrypt($validated['password']);
        $user = User::create($validated);
        // dd($validated);
        return redirect('/home');
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('Message', 'Logged Out!');
    }
}

