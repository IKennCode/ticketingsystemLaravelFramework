@include('parts._head')
@include('parts._navbar')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-2 col-lg-2 px-0 bg-dark">
                @include('parts._ticketsnav')
            </div>
            <div class="col-sm-12 col-md-10 col-lg-10 pt-5" style="height:100vh;">
                <div class="card mt-3">
                    <div class="card-header">
                        <strong>Tickets</strong> | <a class="btn btn-sm btn-primary" href="/tickets/createticket">Create Ticket</a>
                    </div>
                    <div class="card-body pb-0">
                        <form action="/tickets/search" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search" name="search">
                                <button class="btn btn-success" type="submit">Go</button>
                              </div>
                        </form>
                        @include('parts._ticketstable')
                        {{$tickets->onEachSide(0)->links()}} 
                    </div>
                </div> 
            </div>
        </div>
    </div>  
@include('parts._foot')