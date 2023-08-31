@extends('layout.app')

@section('content')
<div class="container-fluid pt-5">
    <div class="card mt-5">
        <div class="card-header">
            <i class="bi bi-person-hearts"></i> &nbsp; <strong>Departments</strong>
        </div>
        <div class="p-2">
            <form action="/departments/savedepartment" method="post" class="mb-4">
                @csrf
                <div class="input-group">
                    <input type="text" name="department_name" class="form-control form-control-sm" id="department_name" placeholder="Department" autofocus required>
                    <button class="btn btn-sm btn-primary" type="submit">Search</button>
                </div>
            </form>
            @include('parts._departmentstable')
        </div>
    </div>
</div>
@endsection