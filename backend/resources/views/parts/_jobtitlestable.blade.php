<table class="min-w-full table-auto mb-4 border-2">
    <thead>
        <tr class="bg-gray-300">
            <th class="px-4 py-2 whitespace-nowrap">#</th>
            <th class="px-4 py-2 whitespace-nowrap">Job Titles</th>
            <th class="px-4 py-2 whitespace-nowrap">Department</th>
            <th class="px-4 py-2 whitespace-nowrap">Status</th>
            <th class="px-4 py-2 whitespace-nowrap"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($jobtitles as $jobtitle)
        <tr class="hover:bg-gray-100">
            <td class="px-4 py-2 whitespace-nowrap text-center text-gray-50">{{$jobtitle->id}}</td>
            <td class="px-4 py-2 whitespace-nowrap text-center text-gray-50">{{$jobtitle->description}}</td>
            <td class="px-4 py-2 whitespace-nowrap text-center text-gray-50">{{$jobtitle->fk_department}}</td>
            <td class="px-4 py-2 whitespace-nowrap text-center text-gray-50">{{$jobtitle->is_active}}</td>
            <td class="px-4 py-2 whitespace-nowrap text-center text-gray-50"><button class="px-4 py-1 border rounded bg-gray-400 hover:bg-gray-900 hover:text-white"><i class="bi bi-three-dots-vertical"></i></button></td>
        </tr>
        @endforeach
    </tbody>
</table>