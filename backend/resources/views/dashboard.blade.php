@include('parts._head')
<div class="flex w-full">
    <div>
        @include('parts._navbar')
    </div>
    <div class="w-full">

        <div class="h-full">
            @include('parts._ticketsnav')
        </div>
        <div class="">
            <h1>This is the dashboard</h1>
            <strong>Ticket Count: {{$ticketCount}}</strong><br>
            <strong>New Ticket Count: {{$newTicketCount}}</strong><br>
            <strong>Open Ticket Count: {{$openTicketCount}}</strong><br>
            <strong>Resolved Ticket Count: {{$resolvedTicketCount}}</strong><br>
            <strong>Cancelled Ticket Count: {{$cancelledTicketCount}}</strong><br>
        </div>
    </div>
</div>
@include('parts._foot')