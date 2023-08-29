@include('parts._head')
<div class="flex justify-center items-center h-screen bg-gray-500">
        <div class="w-64">
            @include('parts._navbar')
        </div>
        <div class="w-full h-screen bg-gray-600">
            <div class="flex bg-gray-700 px-4 py-2 text-white">
                @foreach($ticket as $data)
                <div class=" flex w-full columns-4 p-1">
                    <div class="flex">
                        <ul class="flex">
                            <li class="font-bold">
                                <strong>Ticket</strong>
                            </li>
                            <li class="font-bold">
                                #{{$data->id}} 
                            </li>
                            <li class="nav-item px-1" style="display:{{$data->acknowledged_by||$data->status==3||$data->status==4||$data->status==5 ? 'none' : 'block' }};">
                                <form action="/tickets/acknowledge" method="post" class="d-flex">
                                    @csrf
                                    <input type="hidden" name="ticket_id" value="{{$data->id}}">
                                    <button type="submit" class="btn btn-sm btn-success">Acknowledge</button>
                                </form>
                            </li>
                            <li class="nav-item px-1" style="display:{{$data->status==5||$data->status==4||$data->status==3 ? 'none' : 'block' }};">
                                <form action="/tickets/cancel" method="post" class="d-flex">
                                    @csrf
                                    <input type="hidden" name="ticket_id" value="{{$data->id}}">
                                    <button type="submit" class="btn btn-sm btn-danger">Cancel</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="flex">
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

                <div class="flex">
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
                            <form action="/tickets/resolve" method="post">
                                @csrf
                                @foreach($ticket as $data)
                                <div class="col-12">
                                    <input type="hidden" name="ticket_id" value="{{$data->id}}">
                                    <textarea class="form-control" name="resolution" id="resolution" cols="10" rows="5"
                                        {{$data->status==3||$data->status==4||$data->status==5 ? "disabled" : ""}}
                                    >{{$data->resolution}}</textarea>
                                    <button class="btn btn-primary btn-sm" {{$data->status==3||$data->status==4||$data->status==5 ? "disabled" : ""}}>Resolve</button>
                                </div>
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-64">
        @include('parts._ticketsnav')
        </div>
</div>  
@include('parts._foot')