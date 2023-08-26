@include('parts._head')
<div class="flex">
    <div>
        @include('parts._navbar')
    </div>
    <div class="container-fluid w-full px-5">
        <div class="row m-5">
            <div class="bg-gray-400">
                <div class="flex space-x-4">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="/users/newuser" class="flex-1 bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium text-center" aria-current="page">Create New User</a>
                    <a href="#" class="flex-1 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium text-center">Permissions</a>
                    <a href="/departments" class="flex-1 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium text-center">Departments</a>
                    <a href="/users/newuser" class="flex-1 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium text-center">Job Titles</a>
                </div>
            </div>
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
            <div class="col-sm-12 col-md-10 col-lg-10 pt-3">
                <div class="card">
                    <div class="card-header bg-gray-200 px-4 py-2">
                        <strong>Users</strong>
                    </div>
                    <div class="card-body shadow-sm p-4">
                        <form action="/users/search" method="post" class="my-4 h-full w-1/2">
                            @csrf
                            <div class="flex items-center h-10">
                                <input type="text" class="form-input flex-1 h-full rounded-xl border p-4" placeholder="Search" name="search">
                                <button class="btn btn-success w-1/5 h-full mx-4 rounded-xl border bg-gray-900 text-white" type="submit">Go</button>
                            </div>
                        </form>
                        <div class="overflow-x-auto">
                            <table class="min-w-full table-auto">
                                <thead>
                                    <tr class="bg-gray-300">
                                        <th class="text-center">#</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center w-1/7">Username</th>
                                        <th class="text-center w-1/7">Department</th>
                                        <th class="text-center w-1/7">Job Title</th>
                                        <th class="text-center w-1/7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr class="hover:bg-gray-100">
                                        <td class="px-4 py-2">{{ $user->id }}</td>
                                        <td class="px-4 py-2">{{ $user->last_name }}, {{ $user->first_name }} {{ $user->middle_name }}</td>
                                        <td class="px-4 py-2">{{ $user->username }}</td>
                                        <td class="px-4 py-2 text-center">{{ $user->department }}</td>
                                        <td class="px-4 py-2 text-center">{{ $user->job_title }}</td>
                                        <td class="px-4 py-2">
                                            <button class="btn btn-sm btn-success">
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
                    {{$users->onEachSide(0)->links()}}
                </div> -->
            </div>
        </div>
    </div>
</div>
@include('parts._foot')