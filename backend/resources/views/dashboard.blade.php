
@include('parts._head')
@include('parts._navbar')
    <div class="container-fluid">
        <div class="row mt-5 p-0 pt-1">
            <div class="col-sm-12 col-md-2 col-lg-2 p-0">
                @include('parts._ticketsnav')
            </div>
            <div class="col-sm-12 col-md-10 col-lg-10 p-0">
                <h1>This is the dashboard</h1>
            </div>
        </div>
    </div>
@include('parts._foot')