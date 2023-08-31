<table class="table table-sm table-hover table-stripped">
    <thead class="bg-gray-700 text-white">
        <tr>
            <th class="px-2 py-2 whitespace-nowrap">#</th>
            <th class="px-2 py-2 whitespace-nowrap">Status</th>
            <th class="px-2 py-2 whitespace-nowrap">Title</th>
            <th class="px-2 py-2 whitespace-nowrap">Category</th>
            <th class="px-2 py-2 whitespace-nowrap">Requested By</th>
            <th class="px-2 py-2 whitespace-nowrap">Date</th>
            <th class="px-2 py-2 whitespace-nowrap"></th>
        </tr>
    </thead>
    <tbody class="bg-gray-300">
        @foreach ($tickets as $ticket)
        <tr class="hover:bg-gray-500 text-xs hover:text-white
                @if($ticket->status == 1)
                    bg-yellow-100
                @elseif($ticket->status == 2)
                    bg-cyan-100
                @elseif($ticket->status == 3)
                    bg-green-100
                @elseif($ticket->status == 4)
                    bg-gray-100
                @else
                    bg-red-100
                @endif
            " @php if($ticket->status == 1){
            echo " table-warning"; }elseif($ticket->status == 2){
            echo "table-info";
            }elseif($ticket->status == 3){
            echo "table-success";
            }elseif($ticket->status == 4){
            echo "table-dark";
            }else{
            echo "table-danger";
            }
            @endphp
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
                    <button type="submit" class="btn btn-sm btn-info">
                        <i class="bi bi-three-dots-vertical"></i>view
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>