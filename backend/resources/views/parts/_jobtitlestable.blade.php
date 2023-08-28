<table class="min-w-full table-auto mb-4 border-1 shadow-lg">
    <thead class="bg-gray-700 text-white">
        <tr>
            <th class="px-2 py-2 whitespace-nowrap">#</th>
            <th class="px-2 py-2 whitespace-nowrap">Job Titles</th>
            <th class="px-2 py-2 whitespace-nowrap">Department</th>
            <th class="px-2 py-2 whitespace-nowrap">Status</th>
            <th class="px-2 py-2 whitespace-nowrap"></th>
        </tr>
    </thead>
    <tbody class="bg-gray-300">
        @foreach($jobtitles as $jobtitle)
        <tr class="hover:bg-gray-100 text-xs">
            <td class="px-2 py-1 whitespace-nowrap text-center">{{$jobtitle->id}}</td>
            <td class="px-2 py-1 whitespace-nowrap text-center">{{$jobtitle->description}}</td>
            <td class="px-2 py-1 whitespace-nowrap text-center">{{$jobtitle->fk_department}}</td>
            <td class="px-2 py-1 whitespace-nowrap text-center">{{$jobtitle->is_active}}</td>
            <td class="px-2 py-1 whitespace-nowrap text-center"><button class="px-2 py-1 border rounded bg-gray-400 hover:bg-gray-700 hover:text-white"><i class="bi bi-three-dots-vertical"></i></button></td>
        </tr>
        @endforeach
    </tbody>
</table>