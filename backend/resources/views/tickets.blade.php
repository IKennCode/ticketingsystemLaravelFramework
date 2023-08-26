@include('parts._head')
<div class="flex">
    <div>
        @include('parts._navbar')
    </div>
    <div class="flex-column w-full">

        <div class="">
            @include('parts._ticketsnav')
        </div>

        <div class="">
            <div class="">
                <strong>Tickets</strong> | <a class="" href="/tickets/createticket">Create Ticket</a>
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
@include('parts._foot')