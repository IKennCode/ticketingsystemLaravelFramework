@include('parts._head')
<div class="flex justify-center items-center h-screen">
    <div>
        @include('parts._navbar')
    </div>

    <div class="w-full h-full px-4">

        <div class="bg-gray-200 px-4 py-2">
            <strong>Users</strong>
        </div>
        <div class="p-4">
            <form action="/users/search" method="post" class="mb-4">
                @csrf
                <div class="flex items-center">
                    <input type="text" class="w-1/3 border rounded px-4 py-2 mr-4" placeholder="Search" name="search">
                    <button class="border rounded px-6 py-2" type="submit">Go</button>
                </div>
            </form>
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto mb-4 border border-2">
                    <thead>
                        <tr class="bg-gray-300">
                            <th class="px-4 py-2 whitespace-nowrap">#</th>
                            <th class="px-4 py-2 whitespace-nowrap">Name</th>
                            <th class="px-4 py-2 whitespace-nowrap">Username</th>
                            <th class="px-4 py-2 whitespace-nowrap">Department</th>
                            <th class="px-4 py-2 whitespace-nowrap">Job Title</th>
                            <th class="px-4 py-2 whitespace-nowrap"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2 whitespace-nowrap">{{ $user->id }}</td>
                            <td class="px-4 py-2 whitespace-nowrap">{{ $user->last_name }}, {{ $user->first_name }} {{ $user->middle_name }}</td>
                            <td class="px-4 py-2 whitespace-nowrap">{{ $user->username }}</td>
                            <td class="px-4 py-2 whitespace-nowrap text-center">{{ $user->department }}</td>
                            <td class="px-4 py-2 whitespace-nowrap text-center">{{ $user->job_title }}</td>
                            <td class="px-4 py-2 whitespace-nowrap">
                                <button class="px-4 py-1 border rounded bg-gray-400 hover:bg-gray-900 hover:text-white">
                                    View
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $users->links('pagination::tailwind') }}
        </div>

    </div>

    <div class="w-64 h-screen px-4 py-8 overflow-y-auto bg-gray-900 border-black">
        <div class="flex flex-col space-y-4">

            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                {{ request()->is('users/newuser') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/users/newuser">New User</a>
            <!-- <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                {{ request()->is('users/newuser') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/users/newuser"> -->
            <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                {{ request()->is('permissions') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/permissions">Permissions</a>
            <!-- <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                {{ request()->is('departments') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/departments"> -->
            <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                {{ request()->is('departments') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/departments">Departments</a>

            <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                {{ request()->is('jobtitles') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/jobtitles">Job Titles</a>

        </div>
    </div>
</div>








<!-- <div class="card">
                    <div class="card-header"><strong>Users</strong></div>
                    <div class="card-body shadow-sm">
                        <form action="/users/search" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search" name="search">
                                <button class="btn btn-success" type="submit">Go</button>
                            </div>
                        </form>
                        <table class="table table-sm table-hover table-striped table-bordered">
                            <tr class="table-dark">
                                <th>#</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Department</th>
                                <th>Job Title</th>
                                <th></th>
                            </tr>
                            @foreach ($users as $user)
                            <tr @if ($user->status == 1)
                                class="table-success"
                                @elseif($user->status == 0)
                                class="table-danger"
                                @elseif($user->status == 2)
                                class="table-warning"
                                @endif
                                >
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->last_name }}, {{ $user->first_name }} {{ $user->middle_name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->department }}</td>
                                <td>{{ $user->job_title }}</td>
                                <td>
                                    <button class="btn btn-sm btn-success">
                                        view
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    {{$users->onEachSide(0)->links('pagination::tailwind')}}
                </div> -->
<!-- <div class="col-sm-12 col-md-2 col-lg-2 bg-dark pt-5">
                <ul class="nav flex text-light">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/users/newuser">Create new user</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/users/newuser">Permissions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/users/newuser">Departments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/users/newuser">Job Titles</a>
                    </li>
                </ul>
            </div> -->