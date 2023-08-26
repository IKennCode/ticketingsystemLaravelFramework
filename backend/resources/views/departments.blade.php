@include('parts._head')
<form action="/departments/savedepartment" method="post">
    @csrf
    <input type="text" name="department_name" id="department_name" placeholder="department name" autofocus required>
    {{-- <input type="hidden" name="user_id" value="{{auth()->user()->id}}"> --}}
    <input type="submit" value="Save">
</form>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>DEPARTMENT</th>
            <th>STATUS</th>
        </tr>'
    </thead>
    <tbody>
    @foreach($departments as $department)
        <tr>
            <td>{{$department->id}}</td>
            <td>{{$department->description}}</td>
            <td>{{$department->status}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@include('parts._foot')