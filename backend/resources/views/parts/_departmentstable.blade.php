<table class="min-w-full table-auto mb-4 border-1 shadow-lg">
    <thead class="bg-gray-700 text-white">
        <tr>
            <th class="px-2 py-2 whitespace-nowrap">#</th>
            <th class="px-2 py-2 whitespace-nowrap">DEPARTMENT</th>
            <th class="px-2 py-2 whitespace-nowrap">STATUS</th>
            <th class="px-2 py-2 whitespace-nowrap"></th>
        </tr>'
    </thead>
    <tbody class="bg-gray-300">
        @foreach($departments as $department)
        <tr class="hover:bg-gray-100 text-xs">
            <td class="px-2 py-1 text-center whitespace-nowrap">{{$department->id}}</td>
            <td class="px-2 py-1 whitespace-nowrap">{{$department->description}}</td>
            <td class="px-2 py-1 whitespace-nowrap">{{$department->status}}</td>
            <td class="px-2 py-1 whitespace-nowrap">
                <button class="px-2 py-1 border rounded bg-gray-400 hover:bg-gray-900 hover:text-white"><i class="bi bi-three-dots-vertical"></i></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>