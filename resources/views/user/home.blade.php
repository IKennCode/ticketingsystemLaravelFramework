@include('parts._head')
@include('parts._navigation')

<div class="container-fluid">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>User Type</th>
                <th>Email</th>
                <th>Active</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->user_type }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->is_active }}</td>
                </tr>
            @endforeach()
        </tbody>
    </table>
</div>

@include('parts._foot')