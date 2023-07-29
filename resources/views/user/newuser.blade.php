@include('parts._head', ["title" => "Employee Registration"])
@include('parts._navigation')

<div class="container-fluid mt-5">
    <div class="card">
        <div class="card-header">
            New User
        </div>
        <div class="card-body">
        <form action="/register_user" method="post">
            @csrf
            <div class="input-group mb-3 input-group-sm">
                <span class="input-group-text">Name</span>
                <input type="text" name="name" id="name" class="form-control">
                <input type="hidden" name="is_active" id="is_active" class="form-control" value="1">
            </div>
            <div class="input-group mb-3 input-group-sm">
                <span class="input-group-text">Username</span>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="input-group mb-3 input-group-sm">
                <span class="input-group-text">Email</span>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="input-group mb-3 input-group-sm">
                <span class="input-group-text">Password</span>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="input-group mb-3 input-group-sm">
                <span class="input-group-text">Confirm Password</span>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
            </div>
            <div class="input-group mb-3 input-group-sm">
                <span class="input-group-text">User Type</span>
                <select class="form-control" name="user_type" required>
                    <option value="">--</option>
                    <option value="1">Super Admin</option>
                    <option value="2">Admin</option>
                    <option value="3">Manager</option>
                    <option value="4">Supervisor</option>
                    <option value="5">Staff</option>
                </select>
            </div>
            
            <button class="btn btn-primary btn-sm" type="submit">Save</button>
        </form>
        </div>
        <div class="card-footer"></div>
    </div>
</div>

@include('parts._foot')