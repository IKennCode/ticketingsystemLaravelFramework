<script src="https://cdn.tailwindcss.com"></script>
<body class="bg-gray-50 min-h-screen  drop-shadow-2xl">
    <div class="flex justify-center items-center h-screen bg-slate-200 bg-gray-100 min-h-screen drop-shadow-2xl">
        <div id="form" class="bg-gray-100 block bg-slate-50 p-6 rounded-2xl shadow-[25px_25px_30px_-24px_rgb(0,0,0,0.6)] max-w-3xl ">
            <form method="POST" action="/users/newuser/add">
                @csrf
                <h2 class="text-blue-700 text-3xl font-semibold my-4">New User</h2>
                <!-- full name -->
                <div id="fullName" class="flex flex-row">
                    <!-- first name -->
                    <div id="firstName" class="w-1/2 mr-1">
                        <label for="fname" class="text-sm">First Name</label><br>
                        <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" oninput="this.value = this.value.toUpperCase()" autofocus required
                            class="h-8 w-full rounded-md border border-slate-300 text-sm pl-2 bg-transparent outline-blue-600 shadow-sm">
                    </div>
                    <!-- Middle -->
                    <div class="w-1/2 mr-1">
                            <label for="middle_name" class="text-sm">Middle Name</label>
                            <input type="text" id="middle_name" name="middle_name" value="{{ old('middle_name') }}" oninput="this.value = this.value.toUpperCase()" autofocus required
                                class="h-8 w-full rounded-md border border-slate-300 text-sm pl-2 bg-transparent outline-blue-600 shadow-sm">
                            
                        </div>
                    <!-- last name -->
                    <div id="lastName" class="w-1/2 mr-1">
                        <label for="lname" class="text-sm">Last Name</label><br>
                        <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" oninput="this.value = this.value.toUpperCase()" autofocus required
                            class="h-8 w-full rounded-md border border-slate-300 text-sm pl-2 bg-transparent outline-blue-600 shadow-sm">
                    </div>
                </div>

                <!-- email -->
                <label for="email" class="text-sm">Email</label><br>
                <input type="emial" name="" id="email"
                    class="h-8 w-full rounded-md border border-slate-300 text-sm pl-2 bg-transparent outline-blue-600 shadow-sm">
                <!-- password -->
                <label for="password" class="text-sm">Password</label><br>
                <input type="password" name="" id="password"
                    class="h-8 w-full rounded-md border border-slate-300 text-sm pl-2 bg-transparent outline-blue-600 shadow-sm">
                <!-- confirm password -->
                <label for="confirmPassword" class="text-sm">Confirm Password</label><br>
                <input type="password" name="" id="confirmPassword"
                    class="h-8 w-full rounded-md border border-slate-300 text-sm pl-2 bg-transparent outline-blue-600 shadow-sm">
                <!-- radio buttons for gender -->
                <div id="gender" class="text-sm mb-2">
                    <p class="mt-2">Gender</p>
                    <input type="radio" name="gender" id="male" class="text-sm mx-1" checked><label for="male">Male</label>
                    <input type="radio" name="gender" id="female" class="text-sm mx-1"><label for="female">Female</label>
                    <input type="radio" name="gender" id="other" class="text-sm mx-1"><label for="other">Other</label>
                </div>
                <div id="marital_status" class="text-sm mb-2">
                    <p class="mt-2">Marital Status</p>
                    <input type="radio" name="single" id="marital_status" class="text-sm mx-1" value="1"><label for="single">Single</label>
                    <input type="radio" name="married" id="marital_status" class="text-sm mx-1" value="2"><label for="married">Married</label>
                    <input type="radio" name="widowed" id="marital_status" class="text-sm mx-1" value="3"><label for="widowed">Widowed</label>
                    <input type="radio" name="seperated" id="marital_status" class="text-sm mx-1" value="4"><label for="seperated">Separated</label>
                    <input type="radio" name="divorced" id="marital_status" class="text-sm mx-1" value="5"><label for="divorced">Divorced</label>
                </div>
                <div class="text-sm mb-2">
                            <div class="w-1/2 mr-1 mt-4">
                            <label for="birthdate" class="text-sm mb-2">Birthdate</label>
                            <div class="w-1/2 mr-1">
                                <input id="birthdate" type="date" name="birthdate" class="form-control value="{{ old('birthdate') }}" required>
                            </div>
                        </div>
                        <div class=" w-1/2 mr-1 mt-4">
                            <label for="hired_at" class="text-sm">Date Hired</label>
                            <div class="w-1/2 mr-1">
                                <input id="hired_at" type="date" name="hired_at" class="form-control value="{{ old('hired_at') }}" required>
                            </div>
                        </div>
                </div>
                <div class="flex flex-row">
                    <div class=" flex w-1/2 mr-1">
                            <label for="department" class="text-sm">Department</label>
                            <div class="w-1/2 mr-1">
                                <select id="department" class="form-control" name="department" required>
                                    <option value=""></option>
                                    <option value="1">IT</option>
                                    <option value="2">Finance</option>
                                    <option value="3">Purchasing</option>
                                    <option value="4">Support Service</option>
                                    <option value="5">Customer Relations</option>
                                    
                                </select>
                            </div>
                            <div class="flex w-1/2 mr-1">
                            <label for="job_title" class="text-sm">Job Title</label>
                            <div class="w-1/2 mr-1">
                                <select id="job_title" class="form-control" name="job_title" required>
                                    <option value=""></option>
                                    <option value="1">IT</option>
                                    <option value="2">Finance</option>
                                    <option value="3">Purchasing</option>
                                    <option value="4">Support Service</option>
                                    <option value="5">Customer Relations</option>
                                </select>
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
                                <button type="submit" class="mt-10 bg-blue-700 w-full h-10 cursor-pointer text-white rounded-md hover:bg-blue-600 hover:outline outline-2 outline-blue-600 outline-offset-2 text-sm">
                                    Login
                                </button>
                            </div>
                        </div>  
            </form>
        </div>
    </div>
</body>

