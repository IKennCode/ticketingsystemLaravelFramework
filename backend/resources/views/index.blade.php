@include('parts._head')

<!-- New Login UI -->
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-20 w-auto" src="./image/logo.jpg" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm ">
  <form method="POST" action="/login" class="flex flex-col gap-1">
                    @csrf
                    <input id="username" class="p-2 mt-8 rounded-xl border" type="text" name="username" placeholder="example@gmail.com" value="{{ old('username') }}" required>
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            else{
                                                return back()-> width('error', 'Username / Password is incorrect!');
                                            }
                                        </span>
                                    @enderror
                    <div class="relative">
                    <input  class="p-2 mt-8 rounded-xl border w-full" type="password" name="password" placeholder="8-16 character" required>  
                    </div>
                    <button class="bg-blue rounded-xl text-white py-3 mt-3 shadow-lg shadow-indigo-500/50 hover:scale-110 duration-300 mb-5">Login</button>
                </form>       
  </div>
</div>


@include('parts._foot')