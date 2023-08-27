<div class="w-64 h-screen px-4 py-8 overflow-y-auto bg-gray-900 border-black">
    <div class="flex flex-col space-y-4">

        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                    {{ request()->is('users/newuser') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/users/newuser">New User</a>
        <!-- <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                    {{ request()->is('users/newuser') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/users/newuser"> -->
        <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                    {{ request()->is('permissions') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/permissions">Permissions</a>
        <!-- <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                    {{ request()->is('departments') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/departments"> -->
        <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                    {{ request()->is('departments') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/departments">Departments</a>

        <a class="flex-1 items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg
                    {{ request()->is('jobtitles') ? 'bg-gray-100' : 'hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700' }}" href="/jobtitles">Job Titles</a>

    </div>
</div>