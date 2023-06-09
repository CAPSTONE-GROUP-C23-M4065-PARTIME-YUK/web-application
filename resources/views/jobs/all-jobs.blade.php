@extends('layouts.main')
@section('main')
    <main class="z-20 mx-auto flex w-full flex-1 flex-col gap-y-8 p-4 py-16 lg:w-[1024px]">

        <form class="flex flex-col items-center gap-4 md:flex-row" action="{{ route('all.jobs') }}" method="GET" autocomplete="off">
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
                       id="simple-search" name="search-by-title" type="text" placeholder="Cari judul lowongan" required>
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
                <input list="regency" name="search-by-location" class="focus:ring-acceborder-accent1 dark:focus:ring-acceborder-accent1 block w-full rounded-lg border border-gray-300 bg-gray-50 p-3 pl-10 text-sm text-gray-900 focus:border-accent1 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-accent1" placeholder="Kota/Kabupaten" required>
                <datalist id="regency">
                    @foreach ($getregency as $listregency)
                        <option value="{{ $listregency->name }}">
                    @endforeach
                </datalist>
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
                <input list="category" name="search-by-category" class="focus:ring-acceborder-accent1 dark:focus:ring-acceborder-accent1 block w-full rounded-lg border border-gray-300 bg-gray-50 p-3 pl-10 text-sm text-gray-900 focus:border-accent1 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-accent1" placeholder="Kategori pekerjaan" required>
                <datalist id="category">
                    @foreach ($getcategory as $listcategory)
                        <option value="{{ $listcategory->category }}">
                    @endforeach
                </datalist>
            </div>

            <button class="ml-2 w-full rounded-lg border border-accent1 bg-accent1 p-3 px-5 text-sm font-medium text-white transition-all hover:bg-accent1/80 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 md:w-fit"
                    type="submit">
                Cari
            </button>
        </form>

        <div id="jobs">
            <h1 class="mb-4 text-3xl font-semibold">List Lowongan</h1>
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                @forelse ($data as $job)
                    <div class="relative overflow-hidden rounded-lg transition-all hover:translate-y-1 hover:bg-accent1/20"
                        id="outer-card ">
                        <a class="relative block overflow-hidden rounded-lg border border-accent1 p-4 transition-all sm:p-6 lg:p-8"
                        href="{{ url($job->id . '/detail') }}">

                            <div class="flex flex-row-reverse justify-end gap-4">
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 sm:text-xl">
                                        {{ $job->title }} <span
                                            class="text-xs font-medium text-gray-600">({{ $job->category }})</span>
                                    </h3>

                                    <p class="mt-1 text-xs font-medium text-gray-600">{{ $job->company_name }}</p>
                                </div>

                                <div class="block sm:block sm:shrink-0">
                                    <img class="h-16 w-16 rounded-lg object-cover shadow-sm"
                                        src="{{ $job->company_logo ? asset('images/employers-logo/' . $job->company_logo) : asset('images/defaultCompLogo.png') }}"
                                        alt="{{ $job->company_name }} Logo" />
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
                                    {{ $job->company_province }}, {{ $job->company_regency }}
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
                                    IDR {{ $job->salary }}
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
                                    {{ $job->experience }}
                                </p>
                            </div>

                            <dl class="mt-6 flex justify-between gap-4 sm:gap-6">
                                <div class="flex gap-4 sm:gap-6">
                                    <div class="flex flex-col gap-1">
                                        <dt class="text-sm font-medium text-gray-600">Diunggah</dt>
                                        <dd class="text-xs text-gray-500">{{ $job->created_at->diffForHumans() }}</dd>
                                    </div>

                                    <div class="flex flex-col gap-1">
                                        <dt class="text-sm font-medium text-gray-600">Tipe</dt>
                                        <dd class="text-xs text-gray-500">{{ $job->tipe_lowongan }}</dd>
                                    </div>
                                </div>

                                <div class="self-end text-sm font-medium text-gray-500">
                                    Klik untuk melihat detail
                                </div>
                            </dl>
                        </a>
                    </div>
                @empty
                    <div id="alert-additional-content-2" class="max-w-none p-4 mb-4 text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400 dark:border-yellow-800" role="alert">
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Info</span>
                            <h3 class="text-lg font-medium">
                                <strong>Data tidak ditemukan!</strong>
                            </h3>
                        </div>
                        <div class="mt-2 mb-4 text-sm">
                            Mohon maaf, untuk saat ini data yang Anda cari tidak ada dalam database kami. Silahkan cari kembali dengan kata kunci yang lebih spesifik atau lakukan pencarian manual. Terima kasih...
                        </div>
                        <div class="flex">
                            <a href="{{ route('all.jobs') }}" class="text-white bg-yellow-800 hover:bg-yellow-900 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 text-center inline-flex items-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                            <svg aria-hidden="true" class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                            Cari lagi
                            </a>
                            <button type="button" class="text-yellow-800 bg-transparent border border-yellow-800 hover:bg-yellow-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-yellow-600 dark:border-yellow-600 dark:text-yellow-500 dark:hover:text-white dark:focus:ring-yellow-800" data-dismiss-target="#alert-additional-content-2" aria-label="Close">
                            Dismiss
                            </button>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </main>
@endsection
