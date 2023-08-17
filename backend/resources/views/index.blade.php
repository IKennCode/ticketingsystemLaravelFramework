@include('parts._head')
<section class="bg-gray-50 min-h-screen flex items-center justify-center drop-shadow-2xl" >
        
        <!-- login container starts here -->
        <div class="bg-gray-100 flex rounded-2xl shadow-[25px_25px_30px_-24px_rgb(0,0,0,0.6)] max-w-3xl p-2">
            
        <!-- form here -->
            <div class="sm:w-1/2 px-5 text-slate drop-shadow-lg">
                <h2 class="font-bold text-2xl mt-4">Login Here</h2>
                <p class="text-sm mt-4">If you already a member, easily log in</p>

                <form action="" class="flex flex-col gap-1">
                    <input class="p-2 mt-8 rounded-xl border" type="text" name="email" placeholder="example@gmail.com" required>
                    <div class="relative">
                    <input  class="p-2 mt-8 rounded-xl border w-full" type="password" name="password" placeholder="8-16 character" required>  
                    </div>
                    <button class="bg-blue rounded-xl text-white py-3 mt-3 shadow-lg shadow-indigo-500/50 hover:scale-110 duration-300">Login</button>
                </form> 

                <button class="bg-white border py-2 w-full rounded-xl mt-5 flex justify-center items-center shadow-lg hover:scale-110 duration-300">Login with Google
                <svg  class="ml-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                </svg>
                </button>
                
            </div>

            <!-- image -->
            <div class="sm:block hidden w-1/2 h-full" >
                <img class="rounded-2xl  mb-2 drop-shadow-lg animate-trans-bounce" src="../image/login.jpg" alt="">
            </div>
        </div> 
    </section>
@include('parts._foot')
