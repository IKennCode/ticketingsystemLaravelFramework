@include('parts._head')
@include('parts._navbar')

    <div class="row mt-5 pt-3">
        <div class="col-sm-12 col-md-3 col-lg-3">
            @include('parts._ticketsnav')
        </div>
        <div class="col-sm-12 col-md-9 col-lg-9">
            <div class="card">
                <div class="card-body shadow-sm">
                    @include('parts._ticketstable')
                </div>
            </div> 
        </div>
    </div>  
@include('parts._foot')