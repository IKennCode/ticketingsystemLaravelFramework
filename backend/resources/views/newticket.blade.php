@extends('layout.app')

@section('content')
<div class="container-fluid pt-5">
    <div class="card mt-5">
        <div class="card-header">
            <i class="bi bi-ticket-perforated-fill"></i> &nbsp; <strong>New Ticket</strong>
        </div>
        <div class="card-body">
            <form action="/tickets/createticket/save" method="post">
                @csrf
                <div class="input-group">
                    <label for="title" class="input-group-text">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="ticket title" name="title" autofocus required>
                </div>

                <div class="input-group mt-3">
                    <label for="category" class="input-group-text">Category</label>
                    <select class="form-select" name="category">
                        <option value=""></option>
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
                <div class="input-group mt-3">
                    <label for="description" class="input-group-text">Description</label>
                    <textarea class="form-control" rows="5" id="description" name="description" placeholder="..."></textarea>
                </div>
                <div class="form-check">
                    {{-- HIDDEN INPUTS --}}
                    <input type="hidden" class="w-1/3 border rounded px-4 py-2 mr-4" name="created_by" value="{{auth()->user()->id}}">
                    <input type="hidden" class="w-1/3 border rounded px-4 py-2 mr-4" name="status" value="1">
                    <input type="hidden" class="w-1/3 border rounded px-4 py-2 mr-4" name="created_at" value="	2023-03-21 14:48:08">
                </div>
                <button class="btn btn-sm btn-primary" type="submit"><strong>Submit Ticket</strong></button>
            </form>
        </div>
    </div>
</div>
@endsection