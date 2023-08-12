@include('parts._head')
@include('parts._navbar')

@include('parts._head')
@include('parts._navbar')

    <div class="row mt-5 pt-3">
        <div class="col-sm-12 col-md-3 col-lg-3">
            @include('parts._ticketsnav')
        </div>
        <div class="col-sm-12 col-md-9 col-lg-9">
            <div class="card">
                <div class="card-body shadow-sm">
                    <form action="/tickets/newticket/save" method="post">
                        <div class="mb-3 mt-3">
                            <label for="tickettitle" class="form-label">Title:</label>
                            <input type="text" class="form-control" id="tickettitle" placeholder="ticket title" name="tickettitle">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="ticketcategory" class="form-label">Category:</label>
                            <select class="form-select" name="ticketcategory">
                                <option value="">--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="ticketseverity" class="form-label">Severity:</label>
                            <select class="form-select" name="ticketseverity">
                                <option value="">--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="ticketdescription" class="form-label">Description:</label>
                            <textarea class="form-control" rows="5" id="ticketdescription" name="ticketdescription"></textarea>
                        </div>
                        <div class="form-check mb-3">
                            
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div> 
        </div>
    </div>  
@include('parts._foot')

@include('parts._foot')