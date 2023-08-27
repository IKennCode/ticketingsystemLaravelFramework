<table class="min-w-full table-auto mb-4 border border-2">
    <thead>
        <tr class="bg-gray-300">
            <th class="px-4 py-2 whitespace-nowrap">#</th>
            <th class="px-4 py-2 whitespace-nowrap">Status</th>
            <th class="px-4 py-2 whitespace-nowrap">Title</th>
            <th class="px-4 py-2 whitespace-nowrap">Category</th>
            <th class="px-4 py-2 whitespace-nowrap">Requested By</th>
            <th class="px-4 py-2 whitespace-nowrap">Date</th>
            <th class="px-4 py-2 whitespace-nowrap"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tickets as $ticket)
        <tr class="hover:bg-gray-100" @php if($ticket->status == 1){
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
            <td class="px-4 py-2 whitespace-nowrap">{{ $ticket->id }}</td>
            <td class="px-4 py-2 whitespace-nowrap text-center">{{ $ticket->status }}</td>
            <td class="px-4 py-2 whitespace-nowrap">{{ $ticket->title }}</td>
            <td class="px-4 py-2 whitespace-nowrap text-center">{{ $ticket->category }}</td>
            <td class="px-4 py-2 whitespace-nowrap text-center">{{ $ticket->first_name }} {{ $ticket->last_name }}</td>
            <td class="px-4 py-2 whitespace-nowrap">{{ $ticket->created_at }}</td>
            <td class="px-4 py-2 whitespace-nowrap">
                <form action="/tickets/viewticket/{{$ticket->id}}/{{auth()->user()->id}}" method="POST">
                    @csrf
                    <input type="hidden" name="opened_by" value="{{auth()->user()->id}}">
                    <input type="hidden" name="id" value="{{ $ticket->id }}">
                    <button type="submit" class="px-2 py-1 border rounded bg-gray-400 hover:bg-gray-900 hover:text-white">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>