<aside class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto bg-gray-900 border-black drop-shadow-20xl">

   <div class="flex flex-col items-center mt-6 -mx-2">
      <img class="object-cover w-24 h-24 mx-2 rounded-full" src="../image/myprofile.jpg" alt="avatar">
      <h4 class="mx-2 mt-2 font-medium text-gray-800  dark:text-gray-200">
         @php
         print_r(auth()->user()->first_name);
         @endphp
      </h4>

   </div>

   <div class="flex flex-col justify-between flex-1 mt-6 ">
      <nav>
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
               <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                {{ request()->is('users') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/users">
                  <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                     <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                  <span class="mx-4 font-medium">Users</span>
               </a>


            <li>
               <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                {{ request()->is('tickets') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/tickets">
                  <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                  <span class="mx-4 font-medium">Tickets</span>
               </a>
            </li>
         </ul>
      </nav>
      <form action="/logout" class="d-flex" method="post">
         @csrf
         <a class="flex justify-center items-center px-4 py-2 mt-5 text-red-600 transition-colors duration-300 transform rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700">

            <span class="text-center">
               <button class="flex justify-center items-center whitespace-nowrap">Logout</button>
            </span>

         </a>
      </form>
   </div>
</aside>