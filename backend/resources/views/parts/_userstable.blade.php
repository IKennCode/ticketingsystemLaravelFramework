<table class="min-w-full table-auto mb-4 border border-2">
    <thead>
        <tr class="bg-gray-300">
            <th class="px-4 py-2 whitespace-nowrap">#</th>
            <th class="px-4 py-2 whitespace-nowrap">Name</th>
            <th class="px-4 py-2 whitespace-nowrap">Username</th>
            <th class="px-4 py-2 whitespace-nowrap">Department</th>
            <th class="px-4 py-2 whitespace-nowrap">Job Title</th>
            <th class="px-4 py-2 whitespace-nowrap"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr class="hover:bg-gray-100">
            <td class="px-4 py-2 whitespace-nowrap">{{ $user->id }}</td>
            <td class="px-4 py-2 whitespace-nowrap">{{ $user->last_name }}, {{ $user->first_name }} {{ $user->middle_name }}</td>
            <td class="px-4 py-2 whitespace-nowrap">{{ $user->username }}</td>
            <td class="px-4 py-2 whitespace-nowrap text-center">{{ $user->department }}</td>
            <td class="px-4 py-2 whitespace-nowrap text-center">{{ $user->job_title }}</td>
            <td class="px-4 py-2 whitespace-nowrap">
                <button class="px-4 py-1 border rounded bg-gray-400 hover:bg-gray-900 hover:text-white">
                    View
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>