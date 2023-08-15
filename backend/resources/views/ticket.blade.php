@include('parts._head')
@include('parts._navbar')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-2 col-lg-2 px-0 py-3 bg-dark">
                @include('parts._ticketsnav')
            </div>
            <div class="col-sm-12 col-md-10 col-lg-10 pt-5">
                @foreach($ticket as $data)
                <div class="card mt-3">
                    <div class="card-header">
                        <ul class="nav">
                            <li class="nav-item px-1">
                                <strong>Ticket</strong>
                            </li>
                            <li class="nav-item px-1">
                                #{{$data->id}} 
                            </li>
                            <li class="nav-item px-1" style="display:{{$data->acknowledged_by ? 'none' : 'block' }};">
                                <form action="/tickets/acknowledge" method="post" class="d-flex">
                                    @csrf
                                    <input type="hidden" name="ticket_id" value="{{$data->id}}">
                                    <button type="submit" class="btn btn-sm btn-success">Acknowledge</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group mb-3 input-group-sm">
                                    <span class="input-group-text">Title</span>
                                    <input type="text" class="form-control" value="{{$data->title}}" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="input-group mb-3 input-group-sm">
                                    <span class="input-group-text">Description</span>
                                    <textarea class="form-control" value="{{$data->category}}" disabled>
                                        {{$data->description}}
                                    </textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="input-group mb-3 input-group-sm">
                                    <span class="input-group-text">Status</span>
                                    <input type="text" class="form-control" value="{{$data->status}}" disabled>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="input-group mb-3 input-group-sm">
                                    <span class="input-group-text">Created By</span>
                                    <input type="text" class="form-control" value="{{$data->created_by}}" disabled>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="input-group mb-3 input-group-sm">
                                    <span class="input-group-text">Date Created</span>
                                    <input type="text" class="form-control" value="{{$data->created_at}}" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="display:{{$data->resolved_by ? 'block' : 'none'}};">
                            <div class="col-4">
                                <div class="input-group mb-3 input-group-sm">
                                    <span class="input-group-text">Resolved by:</span>
                                    <input type="text" class="form-control" value="{{$data->resolved_by}}" disabled>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="input-group mb-3 input-group-sm">
                                    <span class="input-group-text">Resolved date:</span>
                                    <input type="text" class="form-control" value="{{$data->resolved_at}}" disabled>
                                </div>
                            </div>

                            <div class="col-4">
                                {{-- <div class="input-group mb-3 input-group-sm">
                                    <span class="input-group-text">Date Created</span>
                                    <input type="text" class="form-control" value="{{$data->created_at}}" disabled>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="card mt-3">
                    <div class="card-header"><strong>Message</strong></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 m-3">
                                <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                <button class="btn btn-primary btn-sm">Send</button>
                            </div>
                            <div class="col-8">
                                <em><strong>User</strong>: Testing</em><br>
                                <strong>User</strong>: Response 1<br>
                                <em><strong>User</strong>: Testing</em><br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header"><strong>Resolution</strong></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <select class="form-control" name="ticket_status" id="ticket_status">
                                    <option value="">--</option>
                                    <option value="3">Open</option>
                                    <option value="4">Resolve</option>
                                    <option value="5">Close</option>
                                    <option value="6">Cancel</option>
                                </select>
                            </div>
                            <div class="col-10">
                                <textarea class="form-control" name="" id="" cols="10" rows="5"></textarea>
                                <button class="btn btn-primary btn-sm">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@include('parts._foot')