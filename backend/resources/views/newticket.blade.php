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
                    <form action="/tickets/createticket/save" method="post">
                        @csrf
                        <div class="mb-3 mt-3">
                            <label for="title" class="form-label">Title:</label>
                            <input type="text" class="form-control" id="title" placeholder="ticket title" name="title">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="category" class="form-label">Category:</label>
                            <select class="form-select" name="category">
                                <option value="">--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        {{-- <div class="mb-3 mt-3">
                            <label for="ticketseverity" class="form-label">Severity:</label>
                            <select class="form-select" name="severity">
                                <option value="">--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div> --}}
                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea class="form-control" rows="5" id="description" name="description"></textarea>
                        </div>
                        <div class="form-check mb-3">
                        {{-- HIDDEN INPUTS --}}
                        <input type="hidden" name="created_by" value="{{auth()->user()->id}}">
                        <input type="hidden" name="status" value="1">
                        <input type="hidden" name="created_at" value="	2023-03-21 14:48:08">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div> 
        </div>
    </div>  
@include('parts._foot')

@include('parts._foot')