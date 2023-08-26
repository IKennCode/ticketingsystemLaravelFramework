@include('parts._head')

<div class="flex  h-screen">
    
    <div>
        @include('parts._navbar')
    </div>

    <div class="w-full columns-4 p-4 ">
        <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-2xl dark:bg-gray-800">
            <div class="px-4 py-2">
                <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">My Ticket<br> Count </h1>
            </div>

        <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                <h1 class="text-7xl font-bold text-gray-800 uppercase dark:text-white">{{$ticketCount}}</h1>    
        </div>

        <!--Div that will hold the pie chart-->
        <div id="chart_div"></div>
    </div>
    <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-2xl dark:bg-gray-800">
            <div class="px-4 py-2">
                <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">Open Ticket Count </h1>
            </div>

        <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                <h1 class="text-7xl font-bold text-gray-800 uppercase dark:text-white">{{$openTicketCount}}</h1>    
        </div>
    </div>
    <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-2xl dark:bg-gray-800">
            <div class="px-4 py-2">
                <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">Resolved Ticket Count </h1>
            </div>

        <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                <h1 class="text-7xl font-bold text-gray-800 uppercase dark:text-white">{{$resolvedTicketCount}}</h1>    
        </div>
    </div>
    <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-2xl dark:bg-gray-800">
            <div class="px-4 py-2">
                <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">Cancelled Ticket Count</h1>
            </div>

        <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                <h1 class="text-7xl font-bold text-gray-800 uppercase dark:text-white">{{$cancelledTicketCount}}</h1>    
        </div>
    </div>
   
        
        
       <!-- <div class="  flex bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium text-center><strong ">Ticket Count: {{$ticketCount}}</strong></div>
       <div class="  flex bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium text-center><strong ">Ticket Count: {{$ticketCount}}</strong></div>
       <div class="  flex bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium text-center><strong ">Ticket Count: {{$ticketCount}}</strong></div>
       <div class="  flex bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium text-center><strong ">Ticket Count: {{$ticketCount}}</strong></div> -->
       
       
        
       
       
       <!-- <strong class="flex-1 bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium text-center">New Ticket Count: {{$newTicketCount}}</strong><br>
        <strong class="flex-1 bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium text-center">Open Ticket Count: {{$openTicketCount}}</strong><br>
        <strong class="flex-1 bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium text-center">Resolved Ticket Count: {{$resolvedTicketCount}}</strong><br>
        <strong class="flex-1 bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium text-center">Cancelled Ticket Count: {{$cancelledTicketCount}}</strong><br> -->
    </div>

    <div class="h-full">
            @include('parts._ticketsnav')
    </div>

    <div id="chart_div"></div>
    
</div>

