<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logs;
use App\Models\Departments;
use App\Models\JobTitles;
use App\Models\Permission;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // DISPLAY SAMPLE USERS TABLE
    public function users(){
        // $data = User::orderBy('id', 'desc')->paginate(10);
        $data = DB::table('users')
        ->join('departments', 'users.department', '=', 'departments.id')
        ->join('job_titles', 'users.job_title', '=', 'job_titles.id')
        ->select('users.*', 'departments.description as department', 'job_titles.description as job_title')
        ->orderBy('id', 'desc')->paginate(10);

        $rules = DB::table('users')
                        ->join('permissions', 'users.permission', '=', 'permissions.id')
                        ->where('users.id', '=', auth()->user()->id)
                        ->select('permissions.*')
                        ->get();
        return view('users', [
            'users' => $data,
            'rules' => $rules
        ]);
    }

    public function user(Request $request){
        $user_id = $request->input('user_id');
        $data = DB::table('users')
        ->where('id', '=', $user_id)->get();
        $rules = DB::table('users')
                        ->join('permissions', 'users.permission', '=', 'permissions.id')
                        ->where('users.id', '=', auth()->user()->id)
                        ->select('permissions.*')
                        ->get();
        return view('user', [
            'users' => $data,
            'rules' => $rules
        ]);
    }

    public function newuser(){
        $departments = Departments::orderBy('description', 'asc')->get();
        $jobtitles = JobTitles::orderBy('description', 'asc')->get();
        $permissions = Permission::orderBy('description', 'asc')->get();
        $rules = DB::table('users')
                        ->join('permissions', 'users.permission', '=', 'permissions.id')
                        ->where('users.id', '=', auth()->user()->id)
                        ->select('permissions.*')
                        ->get();
        return view('new_user', [
            'departments' => $departments,
            'jobtitles' => $jobtitles,
            'permissions' => $permissions,
            'rules' => $rules
        ]);
    }

    public function add(Request $request){
        $validated = $request->validate([
            'first_name' => ['required', 'min:2'],
            'middle_name' => ['min:2'],
            'last_name' => ['required', 'min:2'],
            'birthdate' => ['required'],
            'gender' => ['required'],
            'marital_status' => ['min:1'],
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
            return redirect('/users')
                ->with('error', 'New user created');
        }else{
            return redirect('/users')
                ->with('error', 'Error saving record');
        }
    }

    public function search(Request $request){
        $search_value = $request->input('search');
        $data = User::where('id', 'like', '%'.$search_value.'%')
        ->orWhere('first_name', 'like', '%'.$search_value.'%')
        ->orWhere('last_name', 'like', '%'.$search_value.'%')
        ->orWhere('username', 'like', '%'.$search_value.'%')
        ->paginate(10);
        $rules = DB::table('users')
                        ->join('permissions', 'users.permission', '=', 'permissions.id')
                        ->where('users.id', '=', auth()->user()->id)
                        ->select('permissions.*')
                        ->get();
        return view('users', [
            'users' => $data,
            'rules' => $rules
        ]);
    }

    public function resetpassword(Request $request){
        $data = User::where('id', '=', $request->input('user_id'))
                    ->update(['password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi']);
        if($data){
            return redirect('/users')
                ->with('message', 'Password set to default');
        }else{
            return redirect('/users')
                ->with('message', 'Error resetting password');
        }
    }

    public function changepassword(Request $request){
        $data = User::where('id', '=', $request->input('user_id'))
                    ->update(['password' => Hash::make($request->input('new_password'))]);
        if($data){
            return redirect('/users')
                ->with('message', 'Password changed');
        }else{
            return redirect('/users')
                ->with('message', 'Error changing password');
        }
    }
}

?>