<div class="flex flex-col w-54 h-screen px-4 py-8 overflow-y-auto bg-gray-900 border-black drop-shadow-20xl text-xs">
    <div class="flex flex-col space-y-4">

        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a class="flex-1 items-center w-40 px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                    {{ request()->is('users/newuser') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/users/newuser"><i class="bi bi-person-fill-add"></i> &nbsp; New User</a>
        <!-- <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                    {{ request()->is('users/newuser') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/users/newuser"> -->
        <a class="flex-1 items-center w-40 px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                    {{ request()->is('permissions') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/permissions"><i class="bi bi-key-fill"></i> &nbsp; Permissions</a>
        <!-- <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                    {{ request()->is('departments') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/departments"> -->
        <a class="flex-1 items-center w-40 px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                    {{ request()->is('departments') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/departments"><i class="bi bi-buildings"></i> &nbsp; Departments</a>

        <a class="flex-1 items-center w-40 px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                    {{ request()->is('jobtitles') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/jobtitles"><i class="bi bi-person-vcard-fill"></i> &nbsp; Job Titles</a>

    </div>
</div>