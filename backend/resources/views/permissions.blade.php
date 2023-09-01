@extends('layout.app')

@section('content')
<div class="container-fluid pt-5">
    <div class="card mt-5">
        <div class="card-header">
            <i class="bi bi-key-fill"></i> &nbsp; <strong>Permissions</strong>
        </div>
        <div class="card-body">
            <div class="flex items-center">
                <a class="btn btn-sm btn-warning" href="/permissions/new"><strong>New Permission</strong></a>
            </div>

            <table class="table table-sm table-hover table-stripped mt-3">
                <thead class="table-dark text-center">
                    <tr>
                        <th class="px-2 py-2 whitespace-nowrap">#</th>
                        <th class="px-2 py-2 whitespace-nowrap">DESCRIPTION</th>
                        <th class="px-2 py-2 whitespace-nowrap">STATUS</th>
                        <th class="px-2 py-2 whitespace-nowrap"></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach($permissions as $permission)
                    <tr class="hover:bg-gray-100 text-xs">
                        <td>{{$permission->id}}</td>
                        <td>{{$permission->description}}</td>
                        <td>{{$permission->status}}</td>
                        <td><button class="btn btn-sm btn-info">view</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection