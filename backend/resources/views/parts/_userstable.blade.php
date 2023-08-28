<table class="min-w-full table-auto mb-4 border-1 shadow-lg">
    <thead class="bg-gray-600">
        <tr>
            <th class="px-2 py-2 whitespace-nowrap">#</th>
            <th class="px-2 py-2 whitespace-nowrap">Name</th>
            <th class="px-2 py-2 whitespace-nowrap">Username</th>
            <th class="px-2 py-2 whitespace-nowrap">Department</th>
            <th class="px-2 py-2 whitespace-nowrap">Job Title</th>
            <th class="px-2 py-2 whitespace-nowrap"></th>
        </tr>
    </thead>
    <tbody class="bg-gray-300">
        @foreach ($users as $user)
        <tr class="hover:bg-gray-100 text-xs">
            <td class="px-2 py-2 whitespace-nowrap">{{ $user->id }}</td>
            <td class="px-2 py-2 whitespace-nowrap">{{ $user->last_name }}, {{ $user->first_name }} {{ $user->middle_name }}</td>
            <td class="px-2 py-2 whitespace-nowrap">{{ $user->username }}</td>
            <td class="px-2 py-2 whitespace-nowrap text-center">{{ $user->department }}</td>
            <td class="px-2 py-2 whitespace-nowrap text-center">{{ $user->job_title }}</td>
            <td class="px-2 py-2 whitespace-nowrap">
                <form action="/users/user" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$user->id}}">
                    <button class="px-2 py-1 border rounded bg-gray-400 hover:bg-gray-900 hover:text-white">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>