<nav class="sticky top-0 left-0 z-40 w-full border-b border-gray-200 bg-primary">
    <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
        <a class="flex items-center transition-all hover:translate-x-1" href="/">
            <img class="mr-3 h-8" src="{{ asset('images/emblem.png') }}" alt="Logo">
            <span class="hidden self-center whitespace-nowrap text-2xl font-semibold sm:inline-block">PartTime.yuk</span>
        </a>
        <div class="flex gap-y-4 md:order-2">
            <div class="flex gap-x-2 md:order-2">
                @if (!auth()->user())
                    <a class="mr-3 rounded-lg bg-accent1 px-4 py-2 text-center text-sm font-medium text-white transition-all hover:translate-y-1 focus:outline-none focus:ring-4 focus:ring-blue-300 md:mr-0"
                       type="button" href="{{ route('login') }}">Login</a>
                    <a class="mr-3 rounded-lg border border-accent1 bg-white px-4 py-2 text-center text-sm font-medium text-accent1 transition-all hover:translate-y-1 focus:outline-none focus:ring-4 focus:ring-blue-300 md:mr-0"
                       type="button" href="{{ route('register') }}">Sign Up</a>
                @else
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="mr-3 rounded-lg border border-accent1 bg-white px-4 py-2 text-center text-sm font-medium text-accent1 transition-all hover:translate-y-1 focus:outline-none focus:ring-4 focus:ring-blue-300 md:mr-0"
                                type="submit">Logout</button>
                    </form>
                @endif
            </div>
            <button class="inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
                    data-collapse-toggle="navbar-sticky" type="button" aria-controls="navbar-sticky"
                    aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="hidden w-full items-center justify-between md:order-1 md:flex md:w-auto" id="navbar-sticky">
            <ul
                class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-slate-100 md:p-0">
                <li>
                    <a class="block rounded bg-accent1 py-2 pl-3 pr-4 text-white md:bg-transparent md:p-0 md:text-accent1"
                       href="{{ url('/') }}" aria-current="page">Home</a>
                </li>
                <li>
                    <a class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 md:p-0 md:hover:bg-transparent md:hover:text-accent1"
                       href="{{ url('/all-jobs') }}">Jobs</a>
                </li>
                <li>
                    <a class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 md:p-0 md:hover:bg-transparent md:hover:text-accent1"
                       href="#">Faq</a>
                </li>
                @if (auth()->user())
                    @if (auth()->user()->role == 'administrator')
                        <li>
                            <a class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 md:p-0 md:hover:bg-transparent md:hover:text-accent1"
                               href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                    @else
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Dashboard <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    @if (auth()->user()->role == 'employer')
                                        <li>
                                            <a href="{{ route('job.index') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Data Lowongan</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('job.create') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Buat Lowongan</a>
                                        </li>
                                    @elseif (auth()->user()->role == 'jobseeker')
                                        <li>
                                            <a href="{{ url('/save-loker') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lowongan Disimpan</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/resume') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Buat Resume</a>
                                        </li>
                                    @endif
                                </ul><hr>
                                <div class="py-1">
                                    <a href="{{ auth()->user()->role == 'employer' ? route('profile.employer') : route('profile.jobseeker') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Profile</a>
                                </div>
                            </div>
                        </li>
                    @endif
                @endif

            </ul>
        </div>

    </div>
</nav>