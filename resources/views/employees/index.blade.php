@include('parts._head', ['title' => 'Employee System'])
@include('parts._navigation')
    <form action="/logout" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
    <h1>Employee List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>FIRST NAME</th>
            <th>MIDDLE NAME</th>
            <th>LAST NAME</th>
            <th>AGE</th>
            <th>GENDER</th>
        </tr>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->middle_name }}</td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->age }}</td>
                <td>{{ $employee->gender }}</td>
            </tr>
        @endforeach
    </table>
@include('parts._foot')