@include('parts._head')

<body>
      <section class="bg-gray-800 min-h-screen flex items-center justify-center drop-shadow-2xl" >
              
              <!-- login container starts here -->
              <div class="bg-gray-100 flex rounded-2xl shadow-[25px_25px_30px_-24px_rgb(0,0,0,0.9)]    w-full max-w-sm p-6 m-auto mx-auto  dark:bg-gray-900 drop-shadow-2xl">
                  
              <!-- Form Starts here -->
                  <div class="w-full max-w-sm text-slate drop-shadow-3xl  justify-center mx-auto">
                      <h2 class="font-bold text-2xl mt-4 text-white drop-shadow-3xl ">Login Here</h2>
                      <p class="text-sm mt-4"></p>

                      <form method="POST" action="/login" class="flex flex-col gap-1 drop-shadow-2xl  " >
                          @csrf
                          <label class=" text-1xl mt-4 text-white drop-shadow-3xl">Username</label>
                          <input id="username" class=" drop-shadow-2xl w-full p-2  rounded-xl border   block  px-2 py-2  text-gray-700 bg-white  dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" type="text" name="username" placeholder="example@gmail.com" value="{{ old('username') }}" required>
                                          @error('username')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                          <div class="relative">
                          <label class=" text-1xl mt-4 text-white drop-shadow-3xl">Password</label>
                          <input  class="drop-shadow-2xl p-2 mt-1 rounded-xl border w-full" type="password" name="password" placeholder="8-16 character" required>  
                          </div>
                          <button class="text-drop-shadow-2xl bg-blue rounded-xl text-white py-4 mt-10 shadow-lg shadow-indigo-500/50 hover:scale-110 duration-100 mb-10 font-bold w-auto justify-center items-center">Login</button>
                      </form> 

                  
                      
                  </div>

                  <!-- image -->
                 
              </div> 
          </section>
</body>


@include('parts._foot')