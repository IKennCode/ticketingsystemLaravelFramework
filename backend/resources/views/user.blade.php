@extends('layout.app')

@section('content')
    <div class="container-fluid pt-5">
        <div class="card mt-5">
            <div class="card-header">
                User Profile
            </div>
            <div class="card-body">
                @foreach($users as $user)
                    <div class="row mb-3">
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="input-group">
                                <label class="input-group-text">User ID</label>
                                <input type="text" class="form-control form-control-sm" value="{{$user->id}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="input-group">
                                <label class="input-group-text">First Name</label>
                                <input type="text" class="form-control form-control-sm" value="{{$user->first_name}}" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="input-group">
                                <label class="input-group-text">Middle Name</label>
                                <input type="text" class="form-control form-control-sm" value="{{$user->middle_name}}" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="input-group">
                                <label class="input-group-text">Last Name</label>
                                <input type="text" class="form-control form-control-sm" value="{{$user->last_name}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="input-group">
                                <label class="input-group-text">Birth Date</label>
                                <input type="text" class="form-control form-control-sm" value="{{$user->birthdate}}" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="input-group">
                                <label class="input-group-text">Gender</label>
                                <input type="text" class="form-control form-control-sm" value="{{$user->gender}}" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="input-group">
                                <label class="input-group-text">Marital Status</label>
                                <input type="text" class="form-control form-control-sm" value="{{$user->marital_status}}" disabled>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row mb-3">
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="input-group">
                                <label class="input-group-text">Department</label>
                                <input type="text" class="form-control form-control-sm" value="{{$user->department}}" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="input-group">
                                <label class="input-group-text">Job Title</label>
                                <input type="text" class="form-control form-control-sm" value="{{$user->job_title}}" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="input-group">
                                <label class="input-group-text">Permission</label>
                                <input type="text" class="form-control form-control-sm" value="{{$user->permission}}" disabled>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row mb-3">
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="input-group">
                                <label class="input-group-text">Username</label>
                                <input type="text" class="form-control form-control-sm" value="{{$user->username}}" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="input-group">
                                <label class="input-group-text">Status</label>
                                <input type="text" class="form-control form-control-sm" value="{{$user->status}}" disabled>
                            </div>
                        </div>
                    </div>
                @endforeach

                <hr>

                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        @foreach($users as $user)
                        <div class="input-group">
                            <form action="/users/changepassword" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                <input type="text" name="new_password" id="new_password" class="form-control form-control-sm" placeholder="change_password">
                                <button class="btn btn-sm btn-primary" type="submit">Change Password</button>
                            </form>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-sm-12 col-md-1 col-lg-1">
                        |
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-5">
                        @foreach($users as $user)
                            <form action="/users/resetpassword" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                <button class="btn btn-sm btn-warning" type="submit">Reset Password</button>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection