@include('parts._head')
@include('parts._navbar')

    <div class="row mt-5 pt-3">
        <div class="col-sm-12 col-md-3 col-lg-3">

        </div>
        <div class="col-sm-12 col-md-9 col-lg-9">
            <div class="card">
                <div class="card-body shadow-sm">
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
                            <tr
                                @if($ticket->status == 1)
                                    class="table-success"
                                @elseif($ticket->status == 2)
                                    class="table-warning"
                                @elseif($ticket->status == 3)
                                    class="table-primary"
                                @elseif($ticket->status == 4)
                                    class="table-info"
                                @elseif($ticket->status == 5)
                                    class="table-danger"
                                @elseif($ticket->status == 6)
                                    class="table-secondary"
                                @elseif($ticket->status == 7)
                                    class="table-dark"
                                @elseif($ticket->status == 8)
                                    class="table-active"
                                @endif
                            >
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
                </div>
            </div> 
        </div>
    </div>  
@include('parts._foot')