<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\User;

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

}

?>