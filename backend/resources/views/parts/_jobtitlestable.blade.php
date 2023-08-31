<table class="table table-sm table-hover table-stripped table-responsive">
    <thead class="table-dark text-center">
        <tr>
            <th>#</th>
            <th>Job Titles</th>
            <th>Department</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach($jobtitles as $jobtitle)
        <tr class="hover:bg-gray-100 text-xs">
            <td>{{$jobtitle->id}}</td>
            <td>{{$jobtitle->description}}</td>
            <td>{{$jobtitle->fk_department}}</td>
            <td>{{$jobtitle->is_active}}</td>
            <td><button class="btn btn-sm btn-info"><i class="bi bi-three-dots-vertical"></i>view</button></td>
        </tr>
        @endforeach
    </tbody>
</table>