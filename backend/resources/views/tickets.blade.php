@include('parts._head')
<div class="flex justify-center h-screen">
    <div class="w-64">
        @include('parts._navbar')
    </div>
    <div class="w-full h-screen bg-gray-600">
        <div class="bg-gray-700 px-4 py-2 text-white">
            <i class="bi bi-ticket-perforated-fill"></i> &nbsp; <strong>Tickets</strong>
        </div>
        <div class="p-2">
            <form action="/tickets/search" method="post" class="mb-4">
                @csrf
                <div class="flex items-center">
                    <input type="text" class="w-1/3 border rounded px-4 py-2 mr-1" placeholder="Search" name="search">
                    <button class="border rounded px-4 py-2 bg-gray-400 hover:bg-gray-700 hover:text-white" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>
            @include('parts._ticketstable')
            {{$tickets->onEachSide(0)->links('pagination::tailwind', ['class' => 'text-white'])}}
        </div>

    </div>

    <div class="w-64">
        @include('parts._ticketsnav')
    </div>

</div>
@include('parts._foot')