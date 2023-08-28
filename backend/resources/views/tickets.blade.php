@include('parts._head')
<div class="flex justify-center items-center h-screen bg-gray-100">
    <div class="w-64">
        @include('parts._navbar')
    </div>
    <div class="w-full h-screen">
        <div class="bg-gray-900 px-4 py-2 text-white">
            <i class="bi bi-ticket-perforated-fill"></i> &nbsp; <strong>Tickets</strong>
        </div>
        <div class="p-2">
            <form action="/tickets/search" method="post" class="mb-4">
                @csrf
                <div class="flex items-center">
                    <input type="text" class="w-1/3 border rounded px-4 py-2 mr-4" placeholder="Search" name="search">
                    <button class="border rounded px-6 py-2 bg-gray-400 hover:bg-gray-900 hover:text-white" type="submit">Go</button>
                </div>
            </form>
            @include('parts._ticketstable')
            {{$tickets->onEachSide(0)->links('pagination::tailwind')}}
        </div>

    </div>

    <div class="w-64">
        @include('parts._ticketsnav')
    </div>

</div>
@include('parts._foot')