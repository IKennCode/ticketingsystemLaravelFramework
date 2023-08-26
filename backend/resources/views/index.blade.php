@include('parts._head')
<!-- This is the Login UI without Backend  -->
<section class="bg-gray-50 min-h-screen flex items-center justify-center drop-shadow-2xl" >
        
        <!-- login container starts here -->
        <div class="bg-gray-100 flex rounded-2xl shadow-[25px_25px_30px_-24px_rgb(0,0,0,0.6)] max-w-3xl p-2">
            
        <!-- Form Starts here -->
            <div class=" px-5 text-slate drop-shadow-lg">
                <h2 class="font-bold text-2xl mt-4">Login</h2>
               

                <form method="POST" action="/login" class="flex flex-col gap-1">
                    @csrf
                    <input id="username" class="p-2 mt-8 rounded-xl border" type="text" name="username" placeholder="example@gmail.com" value="{{ old('username') }}" required>
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    <div class="relative">
                    <input  class="p-2 mt-8 rounded-xl border w-full" type="password" name="password" placeholder="8-16 character" required>  
                    </div>
                    <button class="bg-blue rounded-xl text-white py-3 mt-3 shadow-lg shadow-indigo-500/50 hover:scale-110 duration-300 mb-5">Login</button>
                </form> 

             
                
            </div>

            <!-- image -->
           
        </div> 
    </section>
@include('parts._foot')