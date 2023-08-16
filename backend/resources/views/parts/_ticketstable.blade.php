<table class="table table-sm table-hover table-striped table-bordered table-responsive-sm table-responsive-md">
    <thead>
        <tr class="text-center">
            <th>#</th>
            <th>Status</th>
            <th>Title</th>
            <th>Category</th>
            <th>Requested By</th>
            <th>Date</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tickets as $ticket)
            <tr style="font-size: 0.6rem;" class="text-center
                @php
                    if($ticket->status == 1){
                        echo "table-warning";
                    }elseif($ticket->status == 2){
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
                <td class="p-1">{{ $ticket->id }}</td>
                <td class="p-1">{{ $ticket->status }}</td>
                <td class="p-1">{{ $ticket->title }}</td>
                <td class="p-1">{{ $ticket->category }}</td>
                <td class="p-1">{{ $ticket->created_by }}</td>
                <td class="p-1">{{ $ticket->created_at }}</td>
                <td class="p-1">
                    <form action="/tickets/viewticket/{{$ticket->id}}/{{auth()->user()->id}}" method="POST">
                        @csrf
                        <input type="hidden" name="opened_by" value="{{auth()->user()->id}}">
                        <input type="hidden" name="id" value="{{ $ticket->id }}">
                        <button type="submit" class="btn btn-sm btn-success py-0">
                            view
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table> 