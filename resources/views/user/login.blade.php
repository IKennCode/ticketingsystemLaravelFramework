@include('parts._head', ['title' => 'New User'])
@include('parts._navigation')

<div class="container-fluid mt-5">
    <div class="card mx-auto" style="width:300px;margin: 0px auto;">
        <div class="card-header">Login</div>
        <div class="card-body">
            @error('email')
                <span class="badge bg-danger d-flex justify-content-center mb-3 p-3">Incorrect Username/Password</span>
            @enderror
            @error('password')
                <span class="badge bg-danger d-flex justify-content-center mb-3 p-3">Incorrect Username/Password</span>
            @enderror
            <form action="/loginprocess" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Email</span>
                    <input name="username" type="text" class="form-control" placeholder="username" aria-label="username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Password</span>
                    <input name="password" type="password" class="form-control" placeholder="******" aria-label="password" aria-describedby="basic-addon1">
                </div>
                <button class="btn btn-sm btn-primary d-flex" type="submit">
                    Login
                </button>
            </form>
        </div>
        <div class="card-footer">
            <p>Forgot password? Click <em><a href="#">here</a></em></p>
        </div>
    </div>
</div>

@include('parts._foot')