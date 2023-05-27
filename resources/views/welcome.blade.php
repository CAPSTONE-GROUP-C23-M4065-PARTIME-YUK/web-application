<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="flex min-h-screen flex-col bg-primary">
        <nav
             class="sticky top-0 left-0 z-20 w-full border-b border-gray-200 bg-primary dark:border-gray-600 dark:bg-gray-900">
            <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
                <a class="flex items-center" href="https://flowbite.com/">
                    <img class="mr-3 h-8" src="{{ asset('images/emblem.png') }}" alt="Flowbite Logo">
                    <span
                          class="self-center whitespace-nowrap text-2xl font-semibold dark:text-white">PartTime.yuk</span>
                </a>
                <div class="flex md:order-2">
                    <button class="mr-3 rounded-lg bg-accent1 px-4 py-2 text-center text-sm font-medium text-white hover:bg-accent1/80 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 md:mr-0"
                            type="button">Get started</button>
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
                <div class="hidden w-full items-center justify-between bg-primary md:order-1 md:flex md:w-auto"
                     id="navbar-sticky">
                    <ul
                        class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-primary p-4 font-medium dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-primary md:p-0 md:dark:bg-gray-900">
                        <li>
                            <a class="block rounded bg-accent1 py-2 pl-3 pr-4 text-white md:bg-transparent md:p-0 md:text-accent1 md:dark:text-blue-500"
                               href="#" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:p-0 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:bg-transparent md:dark:hover:text-blue-500"
                               href="#">About</a>
                        </li>
                        <li>
                            <a class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:p-0 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:bg-transparent md:dark:hover:text-blue-500"
                               href="#">Services</a>
                        </li>
                        <li>
                            <a class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:p-0 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:bg-transparent md:dark:hover:text-blue-500"
                               href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main class="flex flex-1 justify-center p-4">

            <form class="w-full md:w-1/2">
                <div class="flex">
                    <label class="sr-only mb-2 text-sm font-medium text-gray-900 dark:text-white"
                           for="search-dropdown">Your Email</label>
                    <button class="z-10 inline-flex flex-shrink-0 items-center rounded-l-lg border border-gray-300 bg-gray-100 py-2.5 px-4 text-center text-sm font-medium text-gray-900 hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-700"
                            id="dropdown-button" data-dropdown-toggle="dropdown" type="button">All categories <svg
                             class="ml-1 h-4 w-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg></button>
                    <div class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700"
                         id="dropdown">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                            <li>
                                <button class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                        type="button">Mockups</button>
                            </li>
                            <li>
                                <button class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                        type="button">Templates</button>
                            </li>
                            <li>
                                <button class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                        type="button">Design</button>
                            </li>
                            <li>
                                <button class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                        type="button">Logos</button>
                            </li>
                        </ul>
                    </div>
                    <div class="relative w-full">
                        <input class="z-20 block w-full rounded-r-lg border border-l-2 border-gray-300 border-l-gray-50 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:border-l-gray-700 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500"
                               id="search-dropdown" type="search"
                               placeholder="Cari Magang dan Part Time di Sekitarmu" required>
                        <button class="absolute top-0 right-0 rounded-r-lg border border-accent1 bg-accent1 p-2.5 text-sm font-medium text-white hover:bg-accent1/80 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="submit">
                            <svg class="h-5 w-5" aria-hidden="true" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>

        </main>
    </div>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
