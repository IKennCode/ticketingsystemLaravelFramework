<aside class="flex flex-col w-54 h-screen px-4 py-6 overflow-y-auto bg-gray-800 border-black drop-shadow-20xl">

   <div class="flex flex-col items-center mt-6 -mx-2">
      <img class="object-cover w-24 h-24 mx-2 rounded-full" src="../image/myprofile.jpg" alt="avatar">
      <h4 class="mx-2 mt-2 font-medium text-gray-400  dark:text-gray-200">
         @php
         print_r(auth()->user()->first_name);
         @endphp
      </h4>

   </div>

   <div class="flex flex-col justify-between flex-1 mt-6 ">
      <nav class="text-sm">
         <ul class="relative">
            <li>
               <a class="flex items-center px-4 py-2 text-gray-400 rounded-lg dark:bg-gray-800 dark:text-gray-200 {{ request()->is('dashboard') ? 'bg-gray-100' : 'hover:bg-gray-100 hover:text-gray-700' }}" href="/dashboard">
                  <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                  <span class="mx-4 font-medium">Dashboard</span>
               </a>
            </li>

            <li>
               <a class="flex items-center px-4 py-2 mt-2 text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('users') ? 'bg-gray-100' : 'hover:bg-gray-100 hover:text-gray-700' }}" href="/users">
                  <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                     <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                  <span class="mx-4 font-medium">Users</span>
               </a>

            </li>
            <li class="relative group">
               <a id="ticketsToggle" class="flex items-center px-4 py-2 mt-2 text-gray-400 transition-colors duration-300 transform rounded-lg hover:bg-gray-100 hover:text-gray-700 cursor-pointer" href="#">
                  <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                  <span class="mx-4 font-medium">Tickets</span>

               </a>

               <ul id="ticketsDropdownMenu" class="absolute right-12 hidden opacity-0 scale-95">
                  <li>
                     <a class="block px-4 py-1 ml-5
                     mt-1 text-xs text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-100 hover:text-gray-700' }}" href="/tickets"><i class="bi bi-ticket-perforated-fill"></i> &nbsp; All Tickets</a>
                  </li>
                  <li>
                     <a class="block px-4 py-1 ml-5 mt-1 text-xs text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/mytickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/mytickets"><i class="bi bi-tags-fill"></i> &nbsp; My Tickets</a>
                  </li>
                  <li>
                     <a class="block px-4 py-1 ml-5 mt-1 text-xs text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/newtickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/newtickets"><i class="bi bi-stars"></i> &nbsp; New Tickets</a>
                  </li>
                  <li>
                     <a class="block px-4 py-1 ml-5 mt-1 text-xs text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/opentickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/opentickets"><i class="bi bi-folder2-open"></i> &nbsp; Open Tickets</a>
                  </li>
                  <li>
                     <a class="block px-4 py-1 ml-5 mt-1 text-xs text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/resolvedtickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/resolvedtickets"><i class="bi bi-check2-circle"></i> &nbsp; Resolved Tickets</a>
                  </li>
                  <li>
                     <a class="block px-4 py-1 ml-5 mt-1 text-xs text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/closedtickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/closedtickets"><i class="bi bi-door-closed-fill"></i> &nbsp; Closed Tickets</a>
                  </li>
                  <li>
                     <a class="block px-4 py-1 ml-5 mt-1 text-xs text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/cancelledtickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/cancelledtickets"><i class="bi bi-x-diamond-fill"></i> &nbsp; Cancelled</a>
                  </li>
                  <!-- <li>
                     <a class="block px-4 py-1 ml-5 mb-4 text-sm text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/newtickets') ? 'bg-gray-800' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/newtickets"><i class="bi bi-stars"></i> &nbsp; New Tickets</a>
                  </li> -->

                  <!-- <li>
                     <a class="flex items-center w-40 px-4 py-2 mt-2 text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets/createticket') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets/createticket"><i class="bi bi-plus-circle-fill"></i> &nbsp; Create Tickets</a>
                  </li> -->
                  <!-- Add more dropdown links as needed -->
               </ul>
            </li>

            <li class="relative group  settings-container" id="settings">
               <a id="settingsToggle" class="flex items-center px-4 py-2 mt-2 text-gray-400 transition-colors duration-300 transform rounded-lg hover:bg-gray-100 hover:text-gray-700 cursor-pointer" href="#">
                  <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                     <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="mx-4 font-medium">Settings</span>
                  <svg class="w-3 h-3 ml-16" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m1 1 4 4 4-4" />
                  </svg>
                  <!-- Dropdown Indicator Icon -->
               </a>

               <!-- Dropdown Menu -->
               <ul id="settingsDropdownMenu" class="absolute right-12 hidden opacity-0 scale-95">
                  <li>
                     <a class="block px-4 py-1 ml-5 mt-1 text-xs text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('#') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-100 hover:text-gray-700' }}" href="#"><i class="bi bi-gear"></i> &nbsp; Setting 1</a>
                  </li>
                  <li>
                     <a class="block px-4 py-1 ml-5 mt-1 text-xs text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('#') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="#"><i class="bi bi-gear"></i> &nbsp; Setting 2</a>
                  </li>
                  <li>
                     <a class="block px-4 py-1 ml-5 mt-1 mb-6 text-xs text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('#') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="#"><i class="bi bi-gear"></i> &nbsp; Setting 3</a>
                  </li>
                  <!-- Add more dropdown links as needed -->
               </ul>
            </li>
         </ul>

      </nav>
      <form action="/logout" class="d-flex" method="post">
         @csrf
         <a class="flex justify-center items-center px-4 py-2 mt-2 text-gray-100 transition-colors transform rounded-lg bg-red-600 hover:bg-red-800 dark:hover:bg-red-600 dark:hover:text-gray-200 hover:text-gray-300 font-bold  hover:scale-110 duration-100">

            <span class="text-center text-xs">
               <button class="flex justify-center items-center whitespace-nowrap"><i class="bi bi-box-arrow-right"></i> &nbsp; Sign Out</button>
            </span>

         </a>
      </form>

   </div>
</aside>

<!-- <li>
               <a class="flex items-center px-4 py-2 mt-5 text-gray-400 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets') ? 'bg-gray-100' : 'hover:bg-gray-100 hover:text-gray-700' }}" href="/tickets">
                  <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                  <span class="mx-4 font-medium">Tickets</span>
               </a>
            </li> -->