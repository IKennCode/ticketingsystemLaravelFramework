@include('parts._head')

<div class="flex justify-center items-center h-screen bg-gray-100">

    <div class="w-64">
        @include('parts._navbar')
    </div>

    <div class="w-full columns-4 p-4 ">
        <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-2xl dark:bg-gray-800">
            <div class="px-4 py-2">
                <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">All Ticket </h1>
            </div>

            <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                <h1 class="text-7xl font-bold text-gray-800 uppercase dark:text-white">{{$ticketCount}}</h1>
            </div>

            <!--Div that will hold the pie chart-->
            <div id="chart_div"></div>
        </div>
        <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-2xl dark:bg-gray-800">
            <div class="px-4 py-2">
                <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">New Tickets</h1>
            </div>

            <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                <h1 class="text-7xl font-bold text-gray-800 uppercase dark:text-white">{{$newTicketCount}}</h1>
            </div>
        </div>
        <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-2xl dark:bg-gray-800">
            <div class="px-4 py-2">
                <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">Open Tickets</h1>
            </div>

            <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                <h1 class="text-7xl font-bold text-gray-800 uppercase dark:text-white">{{$openTicketCount}}</h1>
            </div>
        </div>
        <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-2xl dark:bg-gray-800">
            <div class="px-4 py-2">
                <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">Resolved Tickets</h1>
            </div>

            <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                <h1 class="text-7xl font-bold text-gray-800 uppercase dark:text-white">{{$resolvedTicketCount}}</h1>
            </div>
        </div>
        <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-2xl dark:bg-gray-800">
            <div class="px-4 py-2">
                <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">Cancelled Tickets</h1>
            </div>

            <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                <h1 class="text-7xl font-bold text-gray-800 uppercase dark:text-white">{{$cancelledTicketCount}}</h1>
            </div>
        </div>
    </div>


    <div>
        <strong>Ticket Chart</strong>
        <canvas id="myChart"></canvas>
    </div>
      
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      
      <script>
        const ctx = document.getElementById('myChart');
      
        new Chart(ctx, {
          type: 'pie',
          data: {
            labels: ['New Tickets', 'Open Tickets', 'Resolved Tickets', 'Cancelled Tickets'],
            datasets: [{
              label: '# of Tickets',
              data: [{{$newTicketCount}}, {{$openTicketCount}}, {{$resolvedTicketCount}}, {{$cancelledTicketCount}}],
              borderWidth: 1
            }]
          },
          options: {
            // scales: {
            //   y: {
            //     beginAtZero: true
            //   }
            // }
          }
        });
      </script>
      

    <div class="w-64">
        @include('parts._ticketsnav')
    </div>
</div>

@include('parts._foot')