@include('parts._head')
<div class="flex">
    <div>
        @include('parts._navbar')
    </div>
    <div class="flex flex-col w-full h-full">

        <div class="m-4 p-4 border-2 rounded-lg dark:border-gray-700">
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
                {{$tickets->links('pagination::tailwind')}}
            </div>
        </div>
        @include('parts._ticketsnav')
    </div>
</div>
@include('parts._foot')