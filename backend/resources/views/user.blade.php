@include('parts._head')
    <h1>this is the individual users page</h1>
    @foreach($users as $user)
        <p>{{$user->id}}</p>
        <p>{{$user->first_name}}</p>
        <p>{{$user->middle_name}}</p>
        <p>{{$user->last_name}}</p>
        <p>{{$user->birthdate}}</p>
        <p>{{$user->gender}}</p>
        <p>{{$user->marital_status}}</p>
        <p>{{$user->department}}</p>
        <p>{{$user->job_title}}</p>
        <p>{{$user->permission}}</p>
        <p>{{$user->username}}</p>
        <p>{{$user->status}}</p>
        <p>
            <input type="text" placeholder="change_password">
            <input type="submit" value="Update Password">
        </p>
        <p>
            <button>Reset Password</button>
        </p>
    @endforeach
@include('parts._foot')