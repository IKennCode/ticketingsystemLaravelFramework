@include('parts._head')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
<<<<<<< HEAD
                    <div class="card-header">User Login</div>
    
                    <div class="card-body">
                        <form method="POST" action="/login">
                            @csrf
                            <div class="row mb-3">
                                <label for="username" class="col-md-4 col-form-label text-md-end">Username</label>
    
                                <div class="col-md-6">
                                    <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
    
                                    @error('email')
=======
                    <div class="card-header">Login</div>
    
                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Username</label>
    
                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control value="{{ old('username') }}" autofocus required>
                                    @error('username')
>>>>>>> 10754928045cb93a485c5d113b560eaf01875fcb
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
<<<<<<< HEAD
    
=======
>>>>>>> 10754928045cb93a485c5d113b560eaf01875fcb
                                <div class="col-md-6">
                                    <input id="password" type="password" name="password" required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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