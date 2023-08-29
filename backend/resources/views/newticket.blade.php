@include('parts._head')
<div class="flex justify-center h-screen">
    <div class="w-64">
        @include('parts._navbar')
    </div>
    <div class="w-full h-screen bg-gray-400">
        <div class="bg-gray-700 px-4 py-2 text-white">
            <i class="bi bi-ticket-perforated-fill"></i> &nbsp; <strong>New Ticket</strong>
        </div>
        <div class="p-2">
            <form action="/tickets/createticket/save" method="post" class="w-full mb-4">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="title" class="w-1/4 px-4 py-2 mr-4 text-gray-100 font-semibold">Title:</label>
                    <input type="text" class="w-1/3 border rounded bg-gray-300 px-4 py-2 ml-9" id="title" placeholder="Ticket title" name="title">
                </div>
                <div class="mb-3 mt-3">
                    <label for="category" class="w-1/4 px-4 py-2 mr-4 text-gray-100 font-semibold">Category:</label>
                    <select class="w-1/3 border rounded bg-gray-300 px-4 py-2 mr-4" name="category">
                        <option value=""></option>
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
                <div class="mb-3 ">
                    <label for="description" class="w-1/4 px-4 py-2 text-gray-100 font-semibold">Description:</label>
                    <textarea class="w-1/3 border rounded bg-gray-300 px-4 py-2 mr-4" rows="5" id="description" name="description" placeholder="Describe here"></textarea>
                </div>
                <div class="form-check mb-3">
                    {{-- HIDDEN INPUTS --}}
                    <input type="hidden" class="w-1/3 border rounded px-4 py-2 mr-4" name="created_by" value="{{auth()->user()->id}}">
                    <input type="hidden" class="w-1/3 border rounded px-4 py-2 mr-4" name="status" value="1">
                    <input type="hidden" class="w-1/3 border rounded px-4 py-2 mr-4" name="created_at" value="	2023-03-21 14:48:08">
                </div>
                <button class=" px-6 py-2 ml-4 border rounded bg-gray-400 text-gray-700 hover:bg-gray-700 hover:text-white shadow-2xl font-semibold " type="submit">Submit</button>
            </form>
        </div>
    </div>

    <div class="w-64">
        @include('parts._ticketsnav')
    </div>

</div>



</div>
@include('parts._foot')