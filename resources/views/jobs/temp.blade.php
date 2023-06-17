@extends('layouts.main')
@section('main')
    <main class="z-20 mx-auto flex w-full flex-1 flex-col gap-y-8 p-4 py-16 lg:w-[1024px]">

        <form class="flex flex-col items-center gap-4 md:flex-row">
            <label class="sr-only" for="simple-search">Search</label>
            <div class="relative w-full">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                              clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input class="focus:ring-acceborder-accent1 dark:focus:ring-acceborder-accent1 block w-full rounded-lg border border-gray-300 bg-gray-50 p-3 pl-10 text-sm text-gray-900 focus:border-accent1 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-accent1"
                       id="simple-search" type="text" placeholder="Cari Lowongan" required>
            </div>
            <div class="relative w-1/2">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="icon icon-tabler icon-tabler-map-pin text-gray-500" xmlns="http://www.w3.org/2000/svg"
                         width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                        <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                    </svg>
                </div>
                <input class="focus:ring-acceborder-accent1 dark:focus:ring-acceborder-accent1 block w-full rounded-lg border border-gray-300 bg-gray-50 p-3 pl-10 text-sm text-gray-900 focus:border-accent1 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-accent1"
                       id="simple-search" type="text" placeholder="Daerah" required>
            </div>

            <div class="relative w-1/2">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="icon icon-tabler icon-tabler-briefcase text-gray-500" xmlns="http://www.w3.org/2000/svg"
                         width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
                        <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2"></path>
                        <path d="M12 12l0 .01"></path>
                        <path d="M3 13a20 20 0 0 0 18 0"></path>
                    </svg>
                </div>
                <input class="focus:ring-acceborder-accent1 dark:focus:ring-acceborder-accent1 block w-full rounded-lg border border-gray-300 bg-gray-50 p-3 pl-10 text-sm text-gray-900 focus:border-accent1 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-accent1"
                       id="simple-search" type="text" placeholder="Role" required>
            </div>

            <button class="ml-2 w-full rounded-lg border border-accent1 bg-accent1 p-3 px-5 text-sm font-medium text-white transition-all hover:bg-accent1/80 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 md:w-fit"
                    type="submit">
                Cari
            </button>
        </form>

        <div id="jobs">
            <h1 class="mb-4 text-3xl font-semibold">List Lowongan</h1>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                @for ($i = 1; $i < 20; $i++)
                    <div class="relative overflow-hidden rounded-lg transition-all hover:translate-y-1 hover:bg-accent1/20"
                         id="outer-card ">
                        <a class="absolute top-8 right-4 z-10 text-accent1 transition-all hover:text-accent2"
                           href="">
                            <svg class="icon icon-tabler icon-tabler-bookmark" xmlns="http://www.w3.org/2000/svg"
                                 width="30" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"
                                 fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                            </svg>
                        </a>
                        <a class="relative block overflow-hidden rounded-lg border border-accent1 p-4 transition-all sm:p-6 lg:p-8"
                           href="#">

                            <div class="flex flex-row-reverse justify-end gap-4">
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 sm:text-xl">
                                        Software Developer
                                    </h3>

                                    <p class="mt-1 text-xs font-medium text-gray-600">PT.Dicoding</p>
                                </div>

                                <div class="block sm:block sm:shrink-0">
                                    <img class="h-16 w-16 rounded-lg object-cover shadow-sm"
                                         src="{{ asset('images/compLogo.webp') }}" alt="Dicoding" />
                                </div>
                            </div>

                            <div class="mt-4 flex flex-col gap-1">
                                <p class="line-clamp-1 flex max-w-[40ch] items-center gap-1 text-sm text-gray-500">
                                    <svg class="icon icon-tabler icon-tabler-map-pin text-gray-500"
                                         xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                         stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                        <path
                                              d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                        </path>
                                    </svg>
                                    Bandung
                                </p>
                                <p class="line-clamp-1 flex max-w-[40ch] items-center gap-1 text-sm text-gray-500">
                                    <svg class="icon icon-tabler icon-tabler-currency-dollar"
                                         xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                         stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                              d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2">
                                        </path>
                                        <path d="M12 3v3m0 12v3"></path>
                                    </svg>
                                    IDR 9.000.000 - 11.000.000
                                </p>
                                <p class="line-clamp-1 flex max-w-[40ch] items-center gap-1 text-sm text-gray-500">
                                    <svg class="icon icon-tabler icon-tabler-briefcase" xmlns="http://www.w3.org/2000/svg"
                                         width="16" height="16" viewBox="0 0 24 24" stroke-width="2"
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                              d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z">
                                        </path>
                                        <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2"></path>
                                        <path d="M12 12l0 .01"></path>
                                        <path d="M3 13a20 20 0 0 0 18 0"></path>
                                    </svg>
                                    2 - 3 Tahun
                                </p>
                            </div>

                            <dl class="mt-6 flex justify-between gap-4 sm:gap-6">
                                <div class="flex gap-4 sm:gap-6">
                                    <div class="flex flex-col gap-1">
                                        <dt class="text-sm font-medium text-gray-600">Diunggah</dt>
                                        <dd class="text-xs text-gray-500">20 Juni 2023</dd>
                                    </div>

                                    <div class="flex flex-col gap-1">
                                        <dt class="text-sm font-medium text-gray-600">Tipe</dt>
                                        <dd class="text-xs text-gray-500">Magang</dd>
                                    </div>
                                </div>

                                <div class="self-end text-sm font-medium text-gray-500">
                                    Klik untuk melihat detail
                                </div>
                            </dl>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </main>
@endsection
