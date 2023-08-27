<table class="min-w-full table-auto mb-4 border border-2">
    <thead>
        <tr class="bg-gray-300">
            <th class="px-4 py-2 whitespace-nowrap">#</th>
            <th class="px-4 py-2 whitespace-nowrap">DEPARTMENT</th>
            <th class="px-4 py-2 whitespace-nowrap">STATUS</th>
        </tr>'
    </thead>
    <tbody>
        @foreach($departments as $department)
        <tr class="hover:bg-gray-100">
            <td class="px-4 py-2 whitespace-nowrap text-center">{{$department->id}}</td>
            <td class="px-4 py-2 whitespace-nowrap text-center">{{$department->description}}</td>
            <td class="px-4 py-2 whitespace-nowrap text-center">{{$department->status}}</td>
        </tr>
        @endforeach
    </tbody>
</table>