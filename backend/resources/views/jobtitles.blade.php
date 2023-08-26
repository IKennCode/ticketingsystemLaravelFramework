@include('parts._head')
<form action="/jobtitles/save" method="post">
    @csrf
    <input type="text" name="jobtitle" id="jobtitle" autofocus required>
    <select name="department" id="department" required>
        <option value="">--</option>
        @foreach($departments as $department)
            <option value="{{$department->id}}">{{$department->description}}</option>
        @endforeach
    </select>
    <input type="submit" value="Save">
</form>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Job Titles</th>
                <th>Department</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobtitles as $jobtitle)
                <tr>
                    <td>{{$jobtitle->id}}</td>
                    <td>{{$jobtitle->description}}</td>
                    <td>{{$jobtitle->fk_department}}</td>
                    <td>{{$jobtitle->is_active}}</td>
                    <td><button>view</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@include('parts._foot')