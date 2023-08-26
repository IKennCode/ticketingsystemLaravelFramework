@include('parts._head')
<div class="flex justify-center items-center h-screen">
    <div>
        @include('parts._navbar')
    </div>
    <div class="w-full h-full px-4">


        <div class="bg-gray-200 px-4 py-2">
            <strong>Tickets</strong> | <a class="" href="/tickets/createticket">Create Ticket</a>
        </div>
        <div class="p-4">
            <form action="/tickets/search" method="post" class="mb-4">
                @csrf
                <div class="flex items-center">
                    <input type="text" class="w-1/3 border rounded px-4 py-2 mr-4" placeholder="Search" name="search">
                    <button class="border rounded px-6 py-2" type="submit">Go</button>
                </div>
            </form>
            @include('parts._ticketstable')
            {{$tickets->onEachSide(0)->links('pagination::tailwind')}}
        </div>

    </div>
    <div>
        @include('parts._ticketsnav')
    </div>
</div>
@include('parts._foot')