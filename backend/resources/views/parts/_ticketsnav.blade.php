<div class="w-54 h-screen px-4 py-8 overflow-y-auto bg-gray-900 border-black text-xs">
    <div class="flex flex-col space-y-4">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a class="flex-1 items-center w-40 px-4 py-2 mt-5 text-gray-100 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets') ? 'bg-gray-800' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-100 hover:text-gray-200' }}" href="/tickets"><i class="bi bi-ticket-perforated-fill"></i> &nbsp; All Tickets</a>
        <!-- <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets">All Tickets</a> -->
        <a class="flex-1 items-center w-40 px-4 py-2 mt-5 text-gray-100 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/mytickets') ? 'bg-gray-800' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/mytickets"><i class="bi bi-tags-fill"></i> &nbsp; My Tickets</a>
        <!-- <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-100 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/mytickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/mytickets">My Tickets</a> -->
        <a class="flex-1 items-center w-40 px-4 py-2 mt-5 text-gray-100 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/createticket') ? 'bg-gray-800' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/createticket"><i class="bi bi-plus-circle-fill"></i> &nbsp; Create Tickets</a>
        <!-- <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/createticket') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/createticket">Create Tickets</a> -->
        <a class="flex-1 items-center w-40 px-4 py-2 mt-5 text-gray-100 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/newtickets') ? 'bg-gray-800' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/newtickets"><i class="bi bi-stars"></i> &nbsp; New Tickets</a>
        <!-- <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/newtickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/newtickets">New Tickets</a> -->
        <a class="flex-1 items-center w-40 px-4 py-2 mt-5 text-gray-100 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/opentickets') ? 'bg-gray-800' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/opentickets"><i class="bi bi-folder2-open"></i> &nbsp; Open Tickets</a>
        <!-- <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/opentickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/opentickets">Open Tickets</a> -->
        <a class="flex-1 items-center w-40 px-4 py-2 mt-5 text-gray-100 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/resolvedtickets') ? 'bg-gray-800' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/resolvedtickets"><i class="bi bi-check2-circle"></i> &nbsp; Resolved Tickets</a>
        <!-- <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/resolvedtickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/resolvedtickets">Resolved Tickets</a> -->
        <a class="flex-1 items-center w-40 px-4 py-2 mt-5 text-gray-100 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/closedtickets') ? 'bg-gray-800' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/closedtickets"><i class="bi bi-door-closed-fill"></i> &nbsp; Closed Tickets</a>
        <!-- <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/closedtickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/closedtickets">Closed Tickets</a> -->
        <a class="flex-1 items-center w-40 px-4 py-2 mt-5 text-gray-100 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/cancelledtickets') ? 'bg-gray-800' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/cancelledtickets"><i class="bi bi-x-diamond-fill"></i> &nbsp; Cancelled Tickets</a>
        <!-- <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/cancelledtickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/cancelledtickets">Cancelled Tickets</a> -->
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