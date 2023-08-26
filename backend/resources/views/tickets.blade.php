@include('parts._head')
<div class="flex justify-center items-center h-screen">
    <div>
        @include('parts._navbar')
    </div>
    <div class="flex flex-col justify-center w-full h-full">

        <div class="m-4 p-4 h-full items-center border-2 rounded-lg dark:border-gray-700">
            <div class="">
                <strong>Tickets</strong> | <a class="" href="/tickets/createticket">Create Ticket</a>
            </div>
            <div class="flex flex-col h-full py-4">
                <form action="/tickets/search" method="post">
                    @csrf
                    <div class="input-group w-full h-full">
                        <input type="text" class="form-control border border-2 border-gray-600 rounded w-1/3 px-4 py-2" placeholder="Search" name="search">
                        <button class="mx-4 border border-2 border-gray-600 rounded px-4 py-2" type="submit">Go</button>
                    </div>
                </form>
                @include('parts._ticketstable')
                {{$tickets->onEachSide(0)->links('pagination::tailwind')}}
            </div>
        </div>
    </div>
    <div>
        @include('parts._ticketsnav')
    </div>
</div>
@include('parts._foot')