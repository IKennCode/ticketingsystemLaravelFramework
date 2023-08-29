@include('parts._head')
<body class="bg-gray-900 min-h-screen  drop-shadow-2xl">
    <div class="flex justify-center items-center h-screen bg-slate-800 bg-gray-800 max-h-screen drop-shadow-3xl">
        <div id="form" class="bg-gray-900 block bg-slate-50 p-6 rounded-2xl shadow-[25px_25px_30px_-24px_rgb(0,0,0,0.6)] max-w-10xl ">
            <form method="POST" action="/users/newuser/add">
                @csrf
                <h2 class=" text-3xl font-semibold my-4 text-gray-50  drop-shadow-2xl">New User</h2>
             
                <div id="fullName" class="w-auto">
                  
                    <div id="firstName" class=" mr-1">
                        <label for="fname" class=" font-semibold text-gray-50">First Name</label><br>
                        <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" oninput="this.value = this.value.toUpperCase()" autofocus required
                            class="h-8 w-full rounded-md border border-slate-300 text-sm pl-2 bg-gray-50 outline-blue-600 shadow-sm">
                    </div>
                 
                    <div class=" mr-1">
                            <label for="middle_name" class=" font-semibold text-gray-50">Middle Name</label>
                            <input type="text" id="middle_name" name="middle_name" value="{{ old('middle_name') }}" oninput="this.value = this.value.toUpperCase()" autofocus required
                                class="h-8 w-full rounded-md border border-slate-300 text-sm pl-2 bg-gray-50 outline-blue-600 shadow-sm">
                            
                        </div>
                  
                    <div id="lastName" class=" mr-1">
                        <label for="lname" class=" font-semibold text-gray-50">Last Name</label><br>
                        <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" oninput="this.value = this.value.toUpperCase()" autofocus required
                            class="h-8 w-full rounded-md border border-slate-300 text-sm pl-2 bg-gray-50 outline-blue-600 shadow-sm">
                    </div>
                </div>
             

                 <div class="flex flex-row">
                    <div class=" flex w-50 mr-1">
                         <div class="w-1/2 mr-10 mt-4">
                            <label for="gender" class=" font-semibold ml-1 text-gray-50">Gender</label>
                            <div class="w-1/2 mr-1 font-bold">
                                 <select id="gender" class="form-control" name="gender" required>
                                    <option class="font-bold" id="" value=""></option>
                                    <option class="font-bold" id="male" >Male</option>
                                    <option class="font-bold" id="female" >Female</option>
                                    <option class="font-bold" id="other" >Other</option>
                                </select>
                            </div>
                        </div>
                        <div class=" w-1/2 ml-20 mt-4">
                            <label for="hired_at" class=" text-gray-50 rounded-2xl ">Marital Status</label>
                            <div class=" mr-1 rounded-lg">
                                <select id="marital_status" class="form-control" name="" required>
                                    <option name="single" id="marital_status" class="text-sm mx-1 font-bold" value="" ></option>
                                    <option name="single" id="marital_status" class="text-sm mx-1 font-bold" value="1" >Single</option>
                                    <option name="married" id="marital_status" class="text-sm mx-1 font-bold" value="2" >Married</option>
                                    <option name="widowed" id="marital_status" class="text-sm mx-1 font-bold" value="3" >Widowed</option>
                                    <option  name="seperated" id="marital_status" class="text-sm mx-1 font-bold" value="4" >Seperated</option>
                                    <option name="divorced" id="marital_status" class="text-sm mx-1 font-bold" value="5">Divorced</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class=" w-1/2 ml-10 mt-4">
                            <label for="hired_at" class=" font-semibold ml-20 text-gray-50">BirthDate</label>
                            <div class="w-1/2 mr-1 ml-20 font-bold">
                                <input id="birthdate" type="date" name="birthdate" class="form-control value="{{ old('birthdate') }}" required>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-row">
                    <div class=" flex w-50 mr-1">
                         <div class="w-1/2 mr-10 mt-4">
                            <label for="department" class=" font-semibold text-gray-50">Department</label>
                            <div class="w-1/2 mr-1 font-bold">
                            <select id="department" class="form-control" name="department" required>
                                    <option class="font-bold" value=""></option>
                                    <option  class="font-bold" value="1">IT</option>
                                    <option  class="font-bold" value="2">Finance</option>
                                    <option  class="font-bold" value="3">Purchasing</option>
                                    <option  class="font-bold" value="4">Support Service</option>
                                    <option  class="font-bold" value="5">Customer Relations</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="w-1/2 mr-10 mt-4">
                            <label for="department" class=" font-semibold text-gray-50">Job Titles</label>
                            <div class="w-1/2 mr-1 font-bold">
                            <select id="job_title" class="form-control" name="job_title" required>
                                    <option  class="font-bold" value=""></option>
                                    <option  class="font-bold" value="1">IT</option>
                                    <option  class="font-bold" value="2">Finance</option>
                                    <option  class="font-bold" value="3">Purchasing</option>
                                    <option  class="font-bold" value="4">Support Service</option>
                                    <option  class="font-bold" value="5">Customer Relations</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="w-1/2 mr-10 mt-4">
                            <label for="department" class=" font-semibold text-gray-50">Date Hired</label>
                            <div class="w-1/2 mr-1 bg-white font-bold">
                                <input id="hired_at" type="date" name="hired_at" class="form-control value="{{ old('hired_at') }}" required>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                 {{-- <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">Username</label>
                            <div class="col-md-6">
                                <input id="username" type="text" name="username" class="form-control value="{{ old('username') }}" required>
                            </div>
                        </div> --}}
                        
                        <div class="row mb-3"> {{-- HIDDEN INPUT FIELDS --}}
                            <div class="col-md-6">
                                <input id="password" type="hidden" name="password" class="form-control" value="password">
                                <input id="status" type="hidden" name="status" class="form-control" value="1">
                                <input id="username" type="hidden" name="username" value="username" class="form-control">
                            </div>
                        </div>

                        <div>
                            <div >
                                <button type="submit" class=" font-semibold mt-10 bg-blue first-letter w-64 justify-center items-center ml-40 h-10 cursor-pointer text-white rounded-md hover:bg-blue-600 hover:outline outline-2 outline-blue-600 outline-offset-2 text-sm hover:scale-110 duration-100">
                                    Register
                                </button>
                            </div>
                        </div>  
            </form>
        </div>
    </div>
</body>



