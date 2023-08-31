@extends('layout.app')

@section('content')
<div class="conatiner-fluid pt-5">
    <div class="card mt-5">
        <div class="card-header">
            <i class="bi bi-ticket-perforated-fill"></i> &nbsp; <strong>{{$category}} Tickets</strong>
        </div>
        <div class="p-2">
            <form action="/tickets/search" method="post" class="mb-4">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Search" name="search">
                    <button class="btn btn-sm btn-secondary" type="submit"><i class="bi bi-search"></i> Search</button>
                </div>
            </form>
            @include('parts._ticketstable')
            {{$tickets->onEachSide(0)->links()}}
        </div>
    </div>
</div>

@endsection