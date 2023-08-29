@include('parts._head')
<div class="flex justify-center h-screen">
    <div class="w-64">
        @include('parts._navbar')
    </div>
    <div class="w-full h-screen bg-gray-400">
        <div class="bg-gray-700 px-4 py-2 text-white">
            <i class="bi bi-key-fill"></i> &nbsp; <strong>Permissions</strong>
        </div>
        <div class="p-2">
            <form action="/permissions/save" method="post" class="mb-4">
                @csrf
                <div class="flex items-center">
                    <input type="text" name="description" id="description" placeholder="Permission" class="w-1/3 border rounded px-4 py-2 mr-1">
                    <button class=" px-4 py-2 border rounded bg-gray-400 text-gray-700 hover:bg-gray-700 hover:text-white" type="submit" Value="save">Save</button>
                </div>
            </form>

            <table class="min-w-full table-auto mb-4 border-1 shadow-lg">
                <thead class="bg-gray-700 text-white">
                    <tr>
                        <th class="px-2 py-2 whitespace-nowrap">#</th>
                        <th class="px-2 py-2 whitespace-nowrap">DESCRIPTION</th>
                        <th class="px-2 py-2 whitespace-nowrap">STATUS</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-300">
                    @foreach($permissions as $permission)
                    <tr class="hover:bg-gray-100 text-xs">
                        <td class="px-2 py-1 text-center whitespace-nowrap">{{$permission->id}}</td>
                        <td class="px-2 py-1 text-center whitespace-nowrap">{{$permission->description}}</td>
                        <td class="px-2 py-1 text-center whitespace-nowrap">{{$permission->status}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="w-64">
        @include('parts._ticketsnav')
    </div>
</div>
@include('parts._foot')