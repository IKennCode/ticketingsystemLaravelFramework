@include('parts._head')
@include('parts._navbar')
<div class="container-fluid">
    <div class="row mt-5 p-0">
        <div class="col-sm-12 col-md-2 col-lg-2 bg-dark">
            @include('parts._ticketsnav')
        </div>
        <div class="col-sm-12 col-md-10 col-lg-10 pt-5 pb-5">
            <div class="card">
                <div class="card-header">Create Ticket</div>
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
</div>
@include('parts._foot')