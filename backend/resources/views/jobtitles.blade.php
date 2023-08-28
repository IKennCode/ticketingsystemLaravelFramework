@include('parts._head')
<div class="flex justify-center h-screen">
    <div class="w-64">
        @include('parts._navbar')
    </div>
    <div class="w-full h-screen bg-gray-600">
        <div class="bg-gray-700 px-4 py-2 text-white">
            <i class="bi bi-person-hearts"></i> &nbsp; <strong>Job Titles</strong>
        </div>
        <div class="p-2">
            <form action="/jobtitles/save" method="post" class="mb-4">
                @csrf
                <div class="flex items-center">
                    <input type="text" name="jobtitle" id="jobtitle" class="w-1/3 border rounded px-4 py-2 mr-4" placeholder="Job Title" autofocus required>
                    <select name="department" id="department" class="w-1/3 border rounded px-4 py-2 mr-4" required>
                        <option value="Department" selected disabled>Department</option>
                        @foreach($departments as $department)
                        <option value="{{$department->id}}">{{$department->description}}</option>
                        @endforeach
                    </select>
                    <button class="border rounded px-6 py-2 border rounded bg-gray-400 hover:bg-gray-700 hover:text-white" type="submit" Value="save">Save</button>
                </div>
            </form>
            @include('parts._jobtitlestable')
        </div>
    </div>

    <div class="w-64">
        @include('parts._ticketsnav')
    </div>
</div>

@include('parts._foot')