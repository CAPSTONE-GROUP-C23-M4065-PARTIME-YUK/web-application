@extends('layouts.admin')
@section('main')
@include('layouts.sidebar')

<div class="flex min-h-screen flex-col items-center justify-center gap-8 p-4 py-16 sm:ml-64 md:flex-row">
    <section class="w-1/2 rounded-lg bg-white dark:bg-gray-900">

        <div class="relative flex w-full flex-col gap-5 rounded-xl border-2 border-accent1 bg-slate-100 p-8 md:flex-row">
            <div class="w-fit">
                <img class="h-16 w-16 rounded-lg object-cover shadow-sm"
                     src="{{ $jobWithEmployer->company_logo ? asset('images/employers-logo/' . $jobWithEmployer->company_logo) : asset('images/defaultCompLogo.png') }}"
                     alt="{{ $jobWithEmployer->company_name }} Logo" />
            </div>
            <div class="flex flex-1 grow flex-col gap-2">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-800 dark:text-white">
                        {{ $jobWithEmployer->title }}</h5>
                    <p class="text-sm text-gray-500">Posted {{ $jobWithEmployer->created_at->diffForHumans() }}</p>
                </div>

                <h6 class="mb-3 text-lg text-gray-700">{{ $jobWithEmployer->company_name }}</h6>

                <p class="flex max-w-[40ch] items-center gap-1 text-base text-gray-800">
                    <svg class="icon icon-tabler icon-tabler-currency-dollar" xmlns="http://www.w3.org/2000/svg"
                         width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2">
                        </path>
                        <path d="M12 3v3m0 12v3"></path>
                    </svg>
                    IDR {{ $jobWithEmployer->salary }}
                </p>

                <p class="flex max-w-[40ch] items-center gap-1 text-base text-gray-800">
                    <svg class="icon icon-tabler icon-tabler-user-circle" xmlns="http://www.w3.org/2000/svg" width="24"
                         height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                        <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                    </svg>
                    {{ $jobWithEmployer->category }}
                </p>

                <p class="flex max-w-[40ch] items-center gap-1 text-base text-gray-800">
                    <svg class="icon icon-tabler icon-tabler-hourglass-empty" xmlns="http://www.w3.org/2000/svg"
                         width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M6 20v-2a6 6 0 1 1 12 0v2a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1z"></path>
                        <path d="M6 4v2a6 6 0 1 0 12 0v-2a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1z"></path>
                    </svg>
                    {{ $jobWithEmployer->tipe_lowongan }}
                </p>

                <p class="flex max-w-[40ch] items-center gap-1 text-base text-gray-800">
                    <svg class="icon icon-tabler icon-tabler-briefcase" xmlns="http://www.w3.org/2000/svg" width="24"
                         height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
                        <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2"></path>
                        <path d="M12 12l0 .01"></path>
                        <path d="M3 13a20 20 0 0 0 18 0"></path>
                    </svg>
                    {{ $jobWithEmployer->experience }}
                </p>
                <form class="mt-4" action="/save-job" method="POST">
                    @csrf
                    <input name="job_id" type="hidden" value="{{ $jobWithEmployer->id }}">
                    <input name="job_seeker_id" type="hidden" value="{{ Auth::user()->id }}">
              
                    @if (auth()->user()->role == 'jobseeker')
                        @if (auth()->user()->jobseeker === null)
                            <a class="mr-2 mb-2 flex w-fit items-center justify-center rounded-lg border-2 border-accent1 px-5 py-3 text-sm font-medium text-accent1 hover:bg-accent1/30 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            href="{{ url('/profile-jobseeker') }}">
                            <svg class="icon icon-tabler icon-tabler-bookmark inline-block"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                            </svg>
                            Bookmark
                        </a>
                        @else
                        @if (session('message'))
                        <div id="alert-2" class="flex p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Info</span>
                            <div class="ml-3 text-sm font-medium">
                                {{ session('message') }}
                            </div>
                            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                              <span class="sr-only">Close</span>
                              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                          </div>
                          @endif
                            <button class="mb-2 flex w-fit items-center justify-center rounded-full bg-purple-700 px-5 py-3 text-center text-sm font-medium text-white hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900"
                                    type="submit">
                                <svg class="icon icon-tabler icon-tabler-bookmark-filled inline-block"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M15 3a3 3 0 0 1 2.995 2.824l.005 .176v14a1 1 0 0 1 -1.413 .911l-.101 -.054l-4.487 -2.691l-4.485 2.691a1 1 0 0 1 -1.508 -.743l-.006 -.114v-14a3 3 0 0 1 2.824 -2.995l.176 -.005h6z"
                                        stroke-width="0" fill="currentColor"></path>
                                </svg>
                                Bookmark
                            </button>
                        @endif
                    @endif
                </form>
                <hr class="my-4 h-px border-0 bg-gray-200 dark:bg-gray-700">
                <div class="text-gray-800">
                    <h2 class="text-lg font-semibold">Description:</h2>
                    <p class="ml-2">{{ $jobWithEmployer->description }}</p>
                </div>
                <hr class="my-4 h-px border-0 bg-gray-200 dark:bg-gray-700">
                <div class="text-gray-800">
                    <h2 class="text-lg font-semibold">Requirement:</h2>
                    <p class="ml-2">{{ $jobWithEmployer->requirement }}</p>
                </div>
                <hr class="my-4 h-px border-0 bg-gray-200 dark:bg-gray-700">
                <div class="flex w-full flex-col gap-8 rounded-md border border-accent1 p-8">
                    <h2 class="text-lg font-bold">Tentang Perusahaan</h2>
                    <div class="ml-2 flex items-center gap-4">
                        <img class="h-16 w-16 rounded-lg object-cover shadow-sm"
                             src="{{ $jobWithEmployer->company_logo ? asset('images/employers-logo/' . $jobWithEmployer->company_logo) : asset('images/defaultCompLogo.png') }}"
                             alt="{{ $jobWithEmployer->company_name }} Logo" />
                        <div class="text-base font-semibold">
                            <p>
                                {{ $jobWithEmployer->company_name }}
                            </p>
                        </div>
                    </div>
                    <div class="ml-2">
                        <h3 class="font-semibold">Deskripsi Perusahaan</h3>
                        <p class="ml-2">{{ $jobWithEmployer->company_description }}</p>
                    </div>
                    <div class="ml-2">
                        <h3 class="font-semibold">Alamat Kantor</h3>
                        <p class="ml-2">{{ $jobWithEmployer->company_address }}</p>
                    </div>
                    <div class="ml-2">
                        <h3 class="mb-2 font-semibold">Kontak Perusahaan</h3>
                        <div class="flex gap-4 flex-wrap">
                            <div class="flex flex-col items-center justify-center border border-accent1 rounded-md p-4">
                                <h4 class="font-medium">Website</h4>
                                <p>{{ $jobWithEmployer->company_website }}</p>
                            </div>
                            <div class="flex flex-col items-center justify-center border border-accent1 rounded-md p-4">
                                <h4 class="font-medium">Phone</h4>
                                <p>{{ $jobWithEmployer->company_phone }}</p>
                            </div>
                            <div class="flex flex-col items-center justify-center border border-accent1 rounded-md p-4">
                              <h4 class="font-medium">Email</h4>
                              <p>{{ $jobWithEmployer->company_email }}</p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

@endsection