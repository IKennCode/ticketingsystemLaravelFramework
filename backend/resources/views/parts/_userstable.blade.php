<table class="table table-sm table-hover table-stripped table-responsive">
    <thead class="table-dark text-center">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Username</th>
            <th>Department</th>
            <th>Job Title</th>
            <th></th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->last_name }}, {{ $user->first_name }} {{ $user->middle_name }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->department }}</td>
            <td>{{ $user->job_title }}</td>
            <td>
                <form action="/users/user" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$user->id}}">
                    <button class="btn btn-sm btn-info">
                        <i class="bi bi-three-dots-vertical"></i>
                        view
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>