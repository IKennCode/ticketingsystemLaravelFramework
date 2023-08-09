<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'username' => 'required|username',
            'password' => 'required|min:6|max:45'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }else{
            return back()->with('error', 'Username / Password is incorrect!');
        }
    }

    public function logout(){
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }


    // DISPLAY SAMPLE USERS TABLE
    public function users(){
        $users = User::all();

        return response()->json($users);
    }

<<<<<<< HEAD
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:128',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
=======
>>>>>>> bb81f020c8cc299dd810ffb5ca997388ec9c6cbc
}

?>