<button class="mt-2 ml-3 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 sm:hidden"
        data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" type="button" aria-controls="logo-sidebar">
    <span class="sr-only">Open sidebar</span>
    <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
              d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside class="fixed top-0 left-0 z-40 h-screen w-64 -translate-x-full transition-transform sm:translate-x-0"
       id="logo-sidebar" aria-label="Sidebar">
    <div class="h-full overflow-y-auto bg-gray-50 px-3 py-4 dark:bg-gray-800">
        <a class="mb-5 flex items-center pl-2.5 transition-all hover:translate-x-1" href="/">
            <img class="mr-3 h-6 sm:h-7" src="{{ asset('images/emblem.png') }}" alt="Flowbite Logo" />
            <span class="self-center whitespace-nowrap text-xl font-semibold dark:text-white">PartTime.yuk</span>
        </a>
        <ul class="space-y-2 font-medium">
            <li>
                <a class="flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                   href="{{ route('dashboard') }}">
                    <svg class="icon icon-tabler icon-tabler-chart-bar" xmlns="http://www.w3.org/2000/svg"
                         width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 12m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                        <path d="M9 8m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                        <path d="M15 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                        <path d="M4 20l14 0"></path>
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                   href="{{ route('list.user') }}">
                    <svg class="icon icon-tabler icon-tabler-user" xmlns="http://www.w3.org/2000/svg" width="24"
                         height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Pengguna</span>
                </a>
            </li>
            <li>
                <a class="flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                   href="{{ route('list.employers') }}">
                    <svg class="icon icon-tabler icon-tabler-building" xmlns="http://www.w3.org/2000/svg" width="24"
                         height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 21l18 0"></path>
                        <path d="M9 8l1 0"></path>
                        <path d="M9 12l1 0"></path>
                        <path d="M9 16l1 0"></path>
                        <path d="M14 8l1 0"></path>
                        <path d="M14 12l1 0"></path>
                        <path d="M14 16l1 0"></path>
                        <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16"></path>
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Employers</span>
                </a>
            </li>
            <li>
                <a class="flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                   href="{{ route('list.jobseekers') }}">
                    <svg class="icon icon-tabler icon-tabler-user" xmlns="http://www.w3.org/2000/svg" width="24"
                         height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Jobseekers</span>
                </a>
            </li>
            <li>
                <a class="flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                   href="{{ route('list.jobs') }}">
                    <svg class="icon icon-tabler icon-tabler-file-description" xmlns="http://www.w3.org/2000/svg"
                         width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                        <path d="M9 17h6"></path>
                        <path d="M9 13h6"></path>
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Jobs</span>
                </a>
            </li>
            <li>
                <a class="flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                   href="{{ url('/list-contact') }}">
                    <svg class="icon icon-tabler icon-tabler-file-description" xmlns="http://www.w3.org/2000/svg"
                         width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                        <path d="M9 17h6"></path>
                        <path d="M9 13h6"></path>
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Contact US</span>
                </a>
            </li>
            <li>
            <li>
                <a class="flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                   href="{{ url('/') }}">
                    <svg class="icon icon-tabler icon-tabler-file-description" xmlns="http://www.w3.org/2000/svg"
                         width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                        <path d="M9 17h6"></path>
                        <path d="M9 13h6"></path>
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Beranda</span>
                </a>
            </li>
            <li>
                <a class="flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                   href="{{ route('logout') }}">
                    <svg class="icon icon-tabler icon-tabler-file-description" xmlns="http://www.w3.org/2000/svg"
                         width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                        <path d="M9 17h6"></path>
                        <path d="M9 13h6"></path>
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
