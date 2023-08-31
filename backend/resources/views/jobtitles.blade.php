@extends('layout.app')

@section('content')
<div class="container-fluid pt-5">
    <div class="card mt-5">
        <div class="card-header">
            <i class="bi bi-person-hearts"></i> &nbsp; <strong>Job Titles</strong>
        </div>
        <div class="card-body">
            <form action="/jobtitles/save" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="input-group">
                            <label for="jobtitle" class="input-group-text">Job Title</label>
                            <input type="text" name="jobtitle" id="jobtitle" class="form-control form-control-sm" placeholder="Job Title" autofocus required>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-5">
                        <div class="input-group">
                            <label for="jobtitle" class="input-group-text">Job Title</label>
                            <select name="department" id="department" class="form-select form-select-sm" required>
                                <option value="Department" selected disabled>Department</option>
                                @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->description}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-1 col-lg-1">
                        <button class="border rounded px-6 py-2 border rounded bg-gray-400 hover:bg-gray-700 hover:text-white" type="submit" Value="save">Save</button>
                    </div>
                </div>
            </form>
            @include('parts._jobtitlestable')
        </div>
    </div>
</div>

@endsection