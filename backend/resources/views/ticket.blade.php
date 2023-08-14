@include('parts._head')
@include('parts._navbar')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-2 col-lg-2 px-0 bg-dark">
                @include('parts._ticketsnav')
            </div>
            <div class="col-sm-12 col-md-10 col-lg-10 pt-5" style="height:100vh;">
                @foreach($ticket as $data)
                <div class="card mt-3">
                    <div class="card-header">
                        <strong>Ticket</strong> | #{{$data->id}} | 
                        <form action="#" class="d-flex">
                            <a type="submit" class="btn btn-sm btn-success">Acknowledge</a>
                        </form>
                    </div>
                    <div class="card-body pb-0">
                        test
                    </div>
                </div>
                @endforeach 
            </div>
        </div>
    </div>  
@include('parts._foot')