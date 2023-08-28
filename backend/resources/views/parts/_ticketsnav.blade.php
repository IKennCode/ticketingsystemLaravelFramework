<div class="w-50 h-screen px-4 py-8 overflow-y-auto bg-gray-800 border-black">
        <div class="flex flex-col space-y-4 text-xs">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <!-- <a class="flex-1 items-center w-40 px-4 py-2 mt-5 text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-100 hover:text-gray-700' }}" href="/tickets"><i class="bi bi-ticket-perforated-fill"></i> &nbsp; All Tickets</a> -->
                <!-- <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets">All Tickets</a> -->
                <!-- <a class="flex items-center w-40 px-4 py-2 mt-5 text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/mytickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/mytickets"><i class="bi bi-tags-fill"></i> &nbsp; My Tickets</a> -->
                <!-- <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-100 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/mytickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/mytickets">My Tickets</a> -->
                <a class="flex items-center w-40 px-4 py-2 mt-5 text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/createticket') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/createticket"><i class="bi bi-plus-circle-fill"></i> &nbsp; Create New Ticket</a>
                <a class="flex items-center w-40 px-4 py-2 mt-5 text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('userss/newuser') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/users/newuser"><i class="bi bi-person-fill-add"></i> &nbsp; Create New User</a>
                <a class="flex items-center w-40 px-4 py-2 mt-5 text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('permissions') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/permissions"><i class="bi bi-key-fill"></i> &nbsp; Permissions</a>
                <a class="flex items-center w-40 px-4 py-2 mt-5 text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('departments') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/departments"><i class="bi bi-buildings"></i> &nbsp; Departments</a>
                <a class="flex items-center w-40 px-4 py-2 mt-5 text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('jobtitles') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/jobtitles"><i class="bi bi-person-fill-add"></i> &nbsp; Job Titles</a>
                <!-- <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/createticket') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/createticket">Create Tickets</a> -->
                <!-- <a class="flex-1 items-center w-40 px-4 py-2 mt-5 text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/newtickets') ? 'bg-gray-800' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/newtickets"><i class="bi bi-stars"></i> &nbsp; New Tickets</a> -->
                <!-- <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/newtickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/newtickets">New Tickets</a> -->
                <!-- <a class="flex-1 items-center w-40 px-4 py-2 mt-5 text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/opentickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/opentickets"><i class="bi bi-folder2-open"></i> &nbsp; Open Tickets</a> -->
                <!-- <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/opentickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/opentickets">Open Tickets</a> -->
                <!-- <a class="flex-1 items-center w-40 px-4 py-2 mt-5 text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/resolvedtickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/resolvedtickets"><i class="bi bi-check2-circle"></i> &nbsp; Resolved Tickets</a> -->
                <!-- <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/resolvedtickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/resolvedtickets">Resolved Tickets</a> -->
                <!-- <a class="flex-1 items-center w-40 px-4 py-2 mt-5 text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/closedtickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/closedtickets"><i class="bi bi-door-closed-fill"></i> &nbsp; Closed Tickets</a> -->
                <!-- <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/closedtickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/closedtickets">Closed Tickets</a> -->
                <!-- <a class="flex-1 items-center w-40 px-4 py-2 mt-5 text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/cancelledtickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/cancelledtickets"><i class="bi bi-x-diamond-fill"></i> &nbsp; Cancelled Tickets</a> -->
                <!-- <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/cancelledtickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/cancelledtickets">Cancelled Tickets</a> -->
        </div>
        <div class="flex flex-col space-y-4 mt-5 text-gray-400">
                <div>
                        <h3>Legend:</h3>
                </div>
                <div class="px-4 py-1 text-xs text-gray-700">
                        <p class="px-1 py-1 my-1 border rounded bg-yellow-300">
                                <i class="bi bi-stars"></i> &nbsp; New Tickets
                        </p>
                        <p class="px-1 py-1 my-1 border rounded bg-cyan-300">
                                <i class="bi bi-check2-circle"></i> &nbsp; Resolved Tickets
                        </p>
                        <p class="px-1 py-1 my-1 border rounded bg-green-300">
                                <i class="bi bi-door-closed-fill"></i> &nbsp; Closed Tickets
                        </p>
                        <p class="px-1 py-1 my-1 border rounded bg-red-300">
                                <i class="bi bi-x-diamond-fill"></i> &nbsp; Cancelled Tickets
                        </p>
                </div>
        </div>
</div>





<!-- <ul class="nav flex-column mt-5">
   <li class="nav-item">
       <a class="nav-link text-light" href="/tickets">All Tickets</a>
   </li>
   <li class="nav-item">
       <a class="nav-link text-light" href="/tickets/mytickets">My Tickets</a>
   </li>
   <li class="nav-item">
     <a class="nav-link text-light" href="/tickets/createticket">Create ticket</a>
   </li>
   <li class="nav-item">
       <a class="nav-link text-light" href="/tickets/newtickets">New Tickets</a>
   </li>
   <li class="nav-item">
       <a class="nav-link text-light" href="/tickets/opentickets">Open Tickets</a>
   </li>
   <li class="nav-item">
       <a class="nav-link text-light" href="/tickets/resolvedtickets">Resolved Tickets</a>
   </li>
   <li class="nav-item">
       <a class="nav-link text-light" href="/tickets/closedtickets">Closed Tickets</a>
   </li>
   <li class="nav-item">
       <a class="nav-link text-light" href="/tickets/cancelledtickets">Cancelled Tickets</a>
   </li>
</ul> -->