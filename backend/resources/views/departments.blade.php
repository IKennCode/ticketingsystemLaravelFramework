@include('parts._head')
<div class="flex justify-center h-screen">
    <div class=w-64>
        @include('parts._navbar')
    </div>

    <div class="w-full h-screen bg-gray-600">
        <div class="bg-gray-700 px-4 py-2 text-white">
            <i class="bi bi-person-hearts"></i> &nbsp; <strong>Departments</strong>
        </div>
        <div class="p-2">
            <form action="/departments/savedepartment" method="post" class="mb-4">
                @csrf
                <div class="flex items-center">
                    <input type="text" name="department_name" class="w-1/3 border rounded px-4 py-2 mr-1" id="department_name" placeholder="Department" autofocus required>
                    {{-- <input type="hidden" name="user_id" value="{{auth()->user()->id}}"> --}}
                    <button class="px-4 py-2 border rounded bg-gray-400 hover:bg-gray-700 hover:text-white" type="submit" Value="save">Save</button>
                </div>
            </form>
            @include('parts._departmentstable')
        </div>
    </div>

    <div class="w-64">
        @include('parts._usersnav')
    </div>
</div>
@include('parts._foot')