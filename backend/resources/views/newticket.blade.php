@include('parts._head')
<div class="flex justify-center items-center h-screen">
    <div>
        @include('parts._navbar')
    </div>
    <div class="w-full h-full px-4">
        <div class="bg-gray-200 px-4 py-2">
            <strong>New Ticket</strong>
        </div>
        <div class="p-4">
            <form action="/tickets/createticket/save" method="post" class="mb-4">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="title" class="w-1/4 px-4 py-2 mr-4">Title:</label>
                    <input type="text" class="w-1/3 border rounded px-4 py-2 mr-4" id="title" placeholder="Ticket title" name="title">
                </div>
                <div class="mb-3 mt-3">
                    <label for="category" class="w-1/4 px-4 py-2 mr-4">Category:</label>
                    <select class="w-1/3 border rounded px-4 py-2 mr-4" name="category">
                        <option value="">--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                {{-- <div class="mb-3 mt-3">
                                    <label for="ticketseverity" class="form-label">Severity:</label>
                                    <select class="form-select" name="severity">
                                        <option value="">--</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div> --}}
                <div class="mb-3">
                    <label for="description" class="w-1/4 px-4 py-2 mr-4">Description:</label>
                    <textarea class="w-1/3 border rounded px-4 py-2 mr-4" rows="5" id="description" name="description"></textarea>
                </div>
                <div class="form-check mb-3">
                    {{-- HIDDEN INPUTS --}}
                    <input type="hidden" class="w-1/3 border rounded px-4 py-2 mr-4" name="created_by" value="{{auth()->user()->id}}">
                    <input type="hidden" class="w-1/3 border rounded px-4 py-2 mr-4" name="status" value="1">
                    <input type="hidden" class="w-1/3 border rounded px-4 py-2 mr-4" name="created_at" value="	2023-03-21 14:48:08">
                </div>
                <button class="border rounded px-6 py-2 ml-4 border rounded bg-gray-400 hover:bg-gray-900 hover:text-white" type="submit">Submit</button>
            </form>
        </div>
    </div>

    @include('parts._ticketsnav')

</div>



</div>
@include('parts._foot')