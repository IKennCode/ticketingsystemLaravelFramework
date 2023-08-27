@include('parts._head')
<h1>this is the permissions page</h1>
<form action="/permissions/save" method="post">
    @csrf
    <input type="text" name="description" id="description">
    <input type="submit" value="Save">
</form>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>DESCRIPTION</th>
            <th>STATUS</th>
        </tr>
    </thead>
    <tbody>
        @foreach($permissions as $permission)
            <tr>
                <td>{{$permission->id}}</td>
                <td>{{$permission->description}}</td>
                <td>{{$permission->status}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@include('parts._foot')