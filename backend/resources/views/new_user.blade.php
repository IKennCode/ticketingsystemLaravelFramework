@include('parts._head')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New User</div>

                <div class="card-body">
                    <form method="POST" action="/users/newuser/add">
                        @csrf
                        <div class="row mb-3">
                            <label for="first_name" class="col-md-4 col-form-label text-md-end">First Name</label>
                            <div class="col-md-6">
                                <input id="first_name" type="text" name="first_name" class="form-control value="{{ old('first_name') }}" autofocus required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="middle_name" class="col-md-4 col-form-label text-md-end">Middle Name</label>
                            <div class="col-md-6">
                                <input id="middle_name" type="text" name="middle_name" class="form-control value="{{ old('middle_name') }}" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="last_name" class="col-md-4 col-form-label text-md-end">Last Name</label>
                            <div class="col-md-6">
                                <input id="last_name" type="text" name="last_name" class="form-control value="{{ old('last_name') }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="bdate" class="col-md-4 col-form-label text-md-end">Birthdate</label>
                            <div class="col-md-6">
                                <input id="bdate" type="date" name="bdate" class="form-control value="{{ old('bdate') }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">Gender</label>
                            <div class="col-md-6">
                                <select id="gender" class="form-control" name="gender" required>
                                    <option value=""></option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="mstatus" class="col-md-4 col-form-label text-md-end">Marital Status</label>
                            <div class="col-md-6">
                                <select id="mstatus" class="form-control" name="mstatus" required>
                                    <option value=""></option>
                                    <option value="1">Single</option>
                                    <option value="2">Married</option>
                                    <option value="3">Widowed</option>
                                    <option value="4">Separated</option>
                                    <option value="5">Divorced</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="department" class="col-md-4 col-form-label text-md-end">Department</label>
                            <div class="col-md-6">
                                <select id="department" class="form-control" name="department" required>
                                    <option value=""></option>
                                    <option value="1">IT</option>
                                    <option value="2">Finance</option>
                                    <option value="3">Purchasing</option>
                                    <option value="4">Support Service</option>
                                    <option value="5">Customer Relations</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="jobtitle" class="col-md-4 col-form-label text-md-end">Job Title</label>
                            <div class="col-md-6">
                                <select id="jobtitle" class="form-control" name="jobtitle" required>
                                    <option value=""></option>
                                    <option value="1">IT</option>
                                    <option value="2">Finance</option>
                                    <option value="3">Purchasing</option>
                                    <option value="4">Support Service</option>
                                    <option value="5">Customer Relations</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="date_hired" class="col-md-4 col-form-label text-md-end">Date Hired</label>
                            <div class="col-md-6">
                                <input id="date_hired" type="date" name="date_hired" class="form-control value="{{ old('date_hired') }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="permission" class="col-md-4 col-form-label text-md-end">Permission</label>
                            <div class="col-md-6">
                                <select id="permission" class="form-control" name="permission" required>
                                    <option value=""></option>
                                    <option value="1">Requester</option>
                                    <option value="2">Admin</option>
                                    <option value="3">Super Admin</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">Username</label>
                            <div class="col-md-6">
                                <input id="username" type="text" name="username" class="form-control value="{{ old('username') }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" name="password" class="form-control value="{{ old('password') }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password_confirmation" class="col-md-4 col-form-label text-md-end">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('parts._foot')