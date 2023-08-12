<table class="table table-sm table-hover table-striped table-bordered">
    <tr>
        <th>#</th>
        <th>Status</th>
        <th>Title</th>
        <th>Category</th>
        <th>Requested By</th>
        <th>Date</th>
        <th></th>
    </tr>
    @foreach ($tickets as $ticket)
        <tr>
            <td>{{ $ticket->id }}</td>
            <td>{{ $ticket->status }}</td>
            <td>{{ $ticket->title }}</td>
            <td>{{ $ticket->category }}</td>
            <td>{{ $ticket->created_by }}</td>
            <td>{{ $ticket->created_at }}</td>
            <td>
                <button class="btn btn-sm btn-success">
                    view
                </button>
            </td>
        </tr>
    @endforeach
</table> 