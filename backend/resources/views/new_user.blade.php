@include('parts._head')
<div class="flex justify-center h-screen">
    <div class="w-64">
        @include('parts._navbar')
    </div>
    <div class="w-full h-screen bg-gray-600">
        <div class="bg-gray-700 px-4 py-2 text-white">
            <i class="bi bi-person-hearts"></i> &nbsp; <strong>New User</strong>
        </div>
        <div class="p-2">

            <form method="POST" action="/users/newuser/add">
                @csrf
                <div class="flex flex-col">
                    <div class="flex justify-between w-full mb-4">
                        <div id="firstName" class="w-1/3 mx-5">
                            <label for="fname" class="block text-gray-100 font-semibold py-2">First Name</label>
                            <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" oninput="this.value = this.value.toUpperCase()" autofocus required class="block w-full px-4 py-2 rounded bg-gray-300">
                        </div>

                        <div id="middleName" class="w-1/3 mx-5">
                            <label for="middle_name" class="block text-gray-100 font-semibold py-2">Middle Name</label>
                            <input type="text" id="middle_name" name="middle_name" value="{{ old('middle_name') }}" oninput="this.value = this.value.toUpperCase()" autofocus required class="block w-full px-4 py-2 rounded bg-gray-300">
                            <!-- <label for="middle_name" class="">Middle Name</label>
                            <input type="text" id="middle_name" name="middle_name" value="{{ old('middle_name') }}" oninput="this.value = this.value.toUpperCase()" autofocus required class=""> -->

                        </div>

                        <div id="lastName" class="w-1/3 mx-5">
                            <label for="lname" class="block text-gray-100 font-semibold py-2">Last Name</label>
                            <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" oninput="this.value = this.value.toUpperCase()" autofocus required class="block w-full px-4 py-2 rounded bg-gray-300">
                        </div>
                    </div>

                    <div class="flex justify-between w-full mb-4">
                        <div class="w-1/3 mx-5">
                            <label for="birthdate" class="block text-gray-100 font-semibold py-2">BirthDate</label>

                            <input id="birthdate" type="date" name="birthdate" class="block w-full px-4 py-2 rounded bg-gray-300" value=" {{ old('birthdate') }}" required>
                        </div>
                        <div class="w-1/3 mx-5">
                            <label for="gender" class="block text-gray-100 font-semibold py-2">Gender</label>

                            <select id="gender" class="block w-full px-4 py-2 rounded bg-gray-300" name="gender" required>
                                <option id="" value=""></option>
                                <option id="male">Male</option>
                                <option id="female">Female</option>
                                <option id="other">Other</option>
                            </select>
                        </div>

                        <div class="w-1/3 mx-5">
                            <label for="marital_status" class="block text-gray-100 font-semibold py-2">Marital Status</label>

                            <select id="marital_status" class="block w-full px-4 py-2 rounded bg-gray-300" name="" required>
                                <option name="single" id="marital_status" class="text-sm mx-1" value=""></option>
                                <option name="single" id="marital_status" class="text-sm mx-1" value="1">Single</option>
                                <option name="married" id="marital_status" class="text-sm mx-1" value="2">Married</option>
                                <option name="widowed" id="marital_status" class="text-sm mx-1" value="3">Widowed</option>
                                <option name="seperated" id="marital_status" class="text-sm mx-1" value="4">Seperated</option>
                                <option name="divorced" id="marital_status" class="text-sm mx-1" value="5">Divorced</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex justify-between w-full">
                        <div class="w-1/3 mx-5">
                            <label for="department" class="block text-gray-100 font-semibold py-2">Department</label>

                            <select id="department" class="block w-full px-4 py-2 rounded bg-gray-300" name="department" required>
                                <option value=""></option>
                                <option value="1">IT</option>
                                <option value="2">Finance</option>
                                <option value="3">Purchasing</option>
                                <option value="4">Support Service</option>
                                <option value="5">Customer Relations</option>
                            </select>
                        </div>


                        <div class="w-1/3 mx-5">
                            <label for="hired_at" class="block text-gray-100 font-semibold py-2">Date Hired</label>

                            <input id="hired_at" type="date" name="hired_at" class="block w-full px-4 py-2 rounded bg-gray-300" value=" {{ old('hired_at') }}" required>
                        </div>





                        <div class="w-1/3 mx-5">
                            <label for="username" class="block text-gray-100 font-semibold py-2">Username</label>

                            <input id="username" type="text" name="username" class="block w-full px-4 py-2 rounded" value="{{ old('username') }}" required>
                        </div>
                        <!-- <input id="password" type="hidden" name="password" class="" value="password">
                        <input id="status" type="hidden" name="status" class="" value="1">
                        <input id="username" type="hidden" name="username" value="username" class=""> -->
                    </div>
                </div>



                <button type="submit" class=" px-6 py-2 ml-5 mt-3 border rounded bg-gray-400 text-gray-700 hover:bg-gray-700 hover:text-white shadow-2xl font-semibold">
                    Register
                </button>

            </form>
        </div>
    </div>

    <div class="w-54">
        @include('parts._ticketsnav')
    </div>

</div>

@include('parts._foot')