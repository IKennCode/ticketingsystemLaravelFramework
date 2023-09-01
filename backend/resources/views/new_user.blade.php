@extends('layout.app')

@section('content')
<div class="container-fluid pt-5">
    <div class="card mt-5">
        <div class="card-header">
            <i class="bi bi-person-hearts"></i> &nbsp; <strong>Create New User</strong>
            {{$errors}}
        </div>
        <div class="card-body">
            <form method="POST" action="/users/newuser/add">
                @csrf
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="input-group">
                            <label for="fname" class="input-group-text">First Name</label>
                            <input type="text" id="first_name" class="form-control form-control-sm" name="first_name" value="{{ old('first_name') }}" oninput="this.value = this.value.toUpperCase()" autofocus required>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="input-group">
                            <label for="middle_name" class="input-group-text">Middle Name</label>
                            <input type="text" id="middle_name" name="middle_name" value="{{ old('middle_name') }}" oninput="this.value = this.value.toUpperCase()" class="form-control form-control-sm">
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="input-group">
                            <label for="lname" class="input-group-text">Last Name</label>
                            <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" oninput="this.value = this.value.toUpperCase()" required class="form-control form-control-sm">
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="input-group">
                            <label for="birthdate" class="input-group-text">BirthDate</label>
                            <input id="birthdate" type="date" name="birthdate" class="form-control form-control-sm" value=" {{ old('birthdate') }}" required>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="input-group">
                            <label for="gender" class="input-group-text">Gender</label>
                            <select id="gender" class="form-select form-select-sm" name="gender" required>
                                <option value="" value="">--</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="input-group">
                            <label for="marital_status" class="input-group-text">Marital Status</label>
                            <select id="marital_status" class="form-select form-select-sm" name="marital_status" required>
                                <option value="">--</option>
                                <option value="1">Single</option>
                                <option value="2">Married</option>
                                <option value="3">Widowed</option>
                                <option value="4">Seperated</option>
                                <option value="5">Divorced</option>
                            </select>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="input-group">
                            <label for="department" class="input-group-text">Department</label>
                            <select id="department" class="form-select form-select-sm" name="department" required>
                                <option value="">--</option>
                                @foreach($departments as $department)
                                    <option value="{{$department->id}}">{{$department->description}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="input-group">
                            <label for="job_title" class="input-group-text">Job Title</label>
                            <select id="job_title" class="form-select form-select-sm" name="job_title" required>
                                <option value="">--</option>
                                @foreach($jobtitles as $jobtitle)
                                    <option value="{{$jobtitle->id}}">{{$jobtitle->description}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="input-group">
                            <label for="hired_at" class="input-group-text">Date Hired</label>
                            <input id="hired_at" type="date" name="hired_at" class="form-control form-control-sm" value=" {{ old('hired_at') }}" required>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="input-group">
                            <label for="permission" class="input-group-text">Permission</label>
                            <select id="permission" class="form-select form-select-sm" name="permission" required>
                                <option value="">--</option>
                                @foreach($permissions as $perm)
                                    <option value="{{$perm->id}}">{{$perm->description}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-sm btn-primary mt-3">
                    Register User
                </button>

            </form>
        </div>
    </div>

</div>
@endsection