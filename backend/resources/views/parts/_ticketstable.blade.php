<table class="table table-sm table-hover table-stripped">
    <thead class="bg-gray-700 text-white">
        <tr>
            <th>#</th>
            <th>Status</th>
            <th>Title</th>
            <th>Category</th>
            <th>Requested By</th>
            <th>Date</th>
            <th></th>
        </tr>
    </thead>
    <tbody class="bg-gray-300">
        @foreach ($tickets as $ticket)
        <tr class="
                @if($ticket->status == 1)
                    table-primary
                @elseif($ticket->status == 2)
                    table-warning
                @elseif($ticket->status == 3)
                    table-success
                @elseif($ticket->status == 4)
                    table-secondary
                @else
                    table-danger
                @endif
            ">
            <td class="px-2 py-1 whitespace-nowrap">{{ $ticket->id }}</td>
            <td class="px-2 py-1 whitespace-nowrap text-center">
                @if($ticket->status == 1)
                New
                @elseif($ticket->status == 2)
                Acknowledged
                @elseif($ticket->status == 3)
                Resolved
                @elseif($ticket->status == 4)
                Closed
                @else
                Cancelled
                @endif
            </td>
            <td class="px-2 py-1 whitespace-nowrap">{{ $ticket->title }}</td>
            <td class="px-2 py-1 whitespace-nowrap">{{ $ticket->category }}</td>
            <td class="px-2 py-1 whitespace-nowrap">{{ $ticket->first_name }} {{ $ticket->last_name }}</td>
            <td class="px-2 py-1 whitespace-nowrap">{{ $ticket->created_at }}</td>
            <td class="px-2 py-1 whitespace-nowrap">
                <form action="/tickets/viewticket/{{$ticket->id}}/{{auth()->user()->id}}" method="POST">
                    @csrf
                    <input type="hidden" name="opened_by" value="{{auth()->user()->id}}">
                    <input type="hidden" name="id" value="{{ $ticket->id }}">
                    <button type="submit" class="btn btn-sm btn-info text-light">
                        <i class="bi bi-three-dots-vertical"></i><strong>view</strong>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>