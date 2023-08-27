@include('parts._head')

<div class="flex  h-screen">
    
    <div>
        @include('parts._navbar')
    </div>

    <div class="w-full columns-4 p-4 ">
        <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-2xl dark:bg-gray-800">
            <div class="px-4 py-2">
                <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">My Ticket </h1>
            </div>

        <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                <h1 class="text-7xl font-bold text-gray-800 uppercase dark:text-white">{{$ticketCount}}</h1>    
        </div>

        <!--Div that will hold the pie chart-->
        <div id="chart_div"></div>
    </div>
    <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-2xl dark:bg-gray-800">
            <div class="px-4 py-2">
                <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">Open Ticket</h1>
            </div>

        <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                <h1 class="text-7xl font-bold text-gray-800 uppercase dark:text-white">{{$openTicketCount}}</h1>    
        </div>
    </div>
    <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-2xl dark:bg-gray-800">
            <div class="px-4 py-2">
                <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">Resolved Ticket</h1>
            </div>

        <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                <h1 class="text-7xl font-bold text-gray-800 uppercase dark:text-white">{{$resolvedTicketCount}}</h1>    
        </div>
    </div>
    <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-2xl dark:bg-gray-800">
        <div class="px-4 py-2">
            <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">Cancelled Ticket</h1>
        </div>

        <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
            <h1 class="text-7xl font-bold text-gray-800 uppercase dark:text-white">{{$cancelledTicketCount}}</h1>    
        </div>
    </div>
    </div>

    <div class="h-full">
            @include('parts._ticketsnav')
    </div>

    <div id="chart_div"></div>
    
</div>

