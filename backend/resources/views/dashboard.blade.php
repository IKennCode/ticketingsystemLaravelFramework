@extends('layout.app')

@section('content')

<div class="container-fluid pt-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
                <div class="card">
                    <div class="card-header">
                        All Tickets
                    </div>
                    <div class="card-body">
                        {{$ticketCount}}
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
                <div class="card">
                    <div class="card-header">
                        New Tickets
                    </div>
                    <div class="card-body">
                        {{$newTicketCount}}
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
                <div class="card">
                    <div class="card-header">
                        Open Tickets
                    </div>
                    <div class="card-body">
                        {{$openTicketCount}}
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
                <div class="card">
                    <div class="card-header">
                        Resolved Tickets
                    </div>
                    <div class="card-body">
                        {{$resolvedTicketCount}}
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
                <div class="card">
                    <div class="card-header">
                        Cancelled Tickets
                    </div>
                    <div class="card-body">
                        {{$cancelledTicketCount}}
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            

            <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
                <div class="card">
                    <div class="card-header">
                        <strong>Ticket Chart</strong>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
        </div>
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
</div>

@endsection