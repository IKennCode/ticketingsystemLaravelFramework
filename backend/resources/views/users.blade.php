@include('parts._head')
@include('parts._navbar')

    <div class="row mt-5 pt-3">
        <div class="col-sm-12 col-md-3 col-lg-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="/users/newuser">Create new user</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/users/newuser">Permissions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/users/newuser">Departments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/users/newuser">Job Titles</a>
                </li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-9 col-lg-9">
            <div class="card">
                <div class="card-body shadow-sm">
                    <table class="table table-sm table-hover table-striped table-bordered">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Department</th>
                            <th>Job Title</th>
                            <th></th>
                        </tr>
                        @foreach ($users as $user)
                            <tr
                                @if ($user->status == 1)
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
            </div> 
        </div>
    </div>  
@include('parts._foot')