<table class="table table-sm table-hover table-stripped table-responsive">
    <thead class="table-dark text-center">
        <tr>
            <th class="px-2 py-2 whitespace-nowrap">#</th>
            <th class="px-2 py-2 whitespace-nowrap">DEPARTMENT</th>
            <th class="px-2 py-2 whitespace-nowrap">STATUS</th>
            <th class="px-2 py-2 whitespace-nowrap"></th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach($departments as $department)
        <tr>
            <td>{{$department->id}}</td>
            <td>{{$department->description}}</td>
            <td>{{$department->status}}</td>
            <td>
                <button class="btn btn-sm btn-info"><i class="bi bi-three-dots-vertical"></i>
                    <strong>view</strong>
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>