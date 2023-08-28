<aside class="flex flex-col w-54 h-screen px-4 py-8 overflow-y-auto bg-gray-900 border-black drop-shadow-20xl">

   <div class="flex flex-col items-center mt-6 -mx-2">
      <img class="object-cover w-24 h-24 mx-2 rounded-full" src="../image/myprofile.jpg" alt="avatar">
      <h4 class="mx-2 mt-2 font-medium text-gray-800  dark:text-gray-200">
         @php
         print_r(auth()->user()->first_name);
         @endphp
      </h4>

   </div>

   <div class="flex flex-col justify-between flex-1 mt-6 ">
      <nav class="text-xs">
         <ul>
            <li>
               <a class="flex items-center px-4 py-2 text-gray-700 rounded-lg dark:bg-gray-800 dark:text-gray-200 {{ request()->is('dashboard') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/dashboard">
                  <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                  <span class="mx-4 font-medium">Dashboard</span>
               </a>
            </li>

            <li>
               <a class="flex items-center px-4 py-2 mt-5 text-gray-800 transition-colors duration-300 transform rounded-lg
                {{ request()->is('users') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/users">
                  <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                     <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                  <span class="mx-4 font-medium">Users</span>
               </a>


            <li>
               <a class="flex items-center px-4 py-2 mt-5 text-gray-800 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets') ? 'bg-gray-100' : 'hover:bg-gray-900 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets">
                  <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                  <span class="mx-4 font-medium">Tickets</span>
               </a>
            </li>
            <li class="relative group">
               <a id="settingsToggle" class="flex items-center px-4 py-2 mt-5 text-gray-800 transition-colors duration-300 transform rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700 cursor-pointer" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                     <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                     <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                  </svg>
                  <span class="mx-4 font-medium">Settings</span>
                  <!-- Dropdown Indicator Icon -->
                  <svg class="w-4 h-4 ml-auto" viewBox="0 0 20 20" fill="currentColor">
                     <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 1 .5.5v11a.5.5 0 1 1-1 0v-11a.5.5 0 0 1 .5-.5z" />
                  </svg>
               </a>

               <!-- Dropdown Menu -->
               <ul id="settingsDropdownMenu" class="absolute left-0 mt-2 bg-white dark:bg-gray-800 rounded-lg shadow-lg hidden opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-opacity duration-300 transition-transform">
                  <li>
                     <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/settings/profile">Profile</a>
                  </li>
                  <li>
                     <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/settings/security">Security</a>
                  </li>
                  <!-- Add more dropdown links as needed -->
               </ul>
            </li>
         </ul>

      </nav>
      <form action="/logout" class="d-flex" method="post">
         @csrf
         <a class="flex justify-center items-center px-4 py-2 mt-5 text-red-100 transition-colors transform rounded-lg bg-red-700 hover:bg-gray-100 dark:hover:bg-red-600 dark:hover:text-gray-200 hover:text-gray-700 font-bold  hover:scale-110 duration-100">

            <span class="text-center text-xs">
               <button class="flex justify-center items-center whitespace-nowrap"><i class="bi bi-box-arrow-right"></i> &nbsp; Logout</button>
            </span>

         </a>
      </form>

   </div>
</aside>