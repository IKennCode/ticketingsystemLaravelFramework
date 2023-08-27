@include('parts._head')
<div class="flex justify-center items-center h-screen">
    <div>
        @include('parts._navbar')
    </div>

    <div class="w-full h-full px-4">
        <div class="bg-gray-200 px-4 py-2">
            <strong>Departments</strong>
        </div>
        <div class="p-4">
            <form action="/departments/savedepartment" method="post" class="mb-4">
                @csrf
                <div class="flex items-center">
                    <input type="text" name="department_name" class="w-1/3 border rounded px-4 py-2 mr-4" id="department_name" placeholder="Department" autofocus required>
                    {{-- <input type="hidden" name="user_id" value="{{auth()->user()->id}}"> --}}
                    <button class="border rounded px-6 py-2 border rounded bg-gray-400 hover:bg-gray-900 hover:text-white" type="submit" Value="save">Save</button>
                </div>
            </form>
            @include('parts._departmentstable')
        </div>
    </div>
    @include('parts._usersnav')
</div>
@include('parts._foot')