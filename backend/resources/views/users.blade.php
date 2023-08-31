@extends('layout.app')

@section('content')
<div class="container-fluid pt-5">
    <div class="card mt-5">
        <div class="card-header">
            <i class="bi bi-person-hearts"></i> &nbsp; <strong>Users</strong>
        </div>
        <div class="p-2">
            <form action="/users/search" method="post" class="mb-4">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Search" name="search">
                    <button class="btn btn-sm btn-secondary" type="submit"><i class="bi bi-search"></i>search</button>
                </div>
            </form>
            @include('parts._userstable')
            <div>{{ $users->onEachSide(0)->links() }}</div>
        </div>

    </div>

</div>
@endsection









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