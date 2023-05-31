@extends('layouts.admin')
@section('main')
    @include('layouts.sidebar')
    <div class="flex min-h-screen flex-col items-center justify-center gap-8 p-4 sm:ml-64 md:flex-row">
        <a class="flex w-40 max-w-sm flex-col items-center rounded-lg border border-gray-200 bg-white p-6 shadow transition-all hover:translate-y-1 dark:border-gray-700 dark:bg-gray-800"
           href="{{ route('jobseeker.index') }}">
            <svg class="icon icon-tabler icon-tabler-user w-14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
            </svg>
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Jobseekers
            </h5>
        </a>
        <a class="flex w-40 max-w-sm flex-col items-center rounded-lg border border-gray-200 bg-white p-6 shadow transition-all hover:translate-y-1 dark:border-gray-700 dark:bg-gray-800"
           href="{{ route('employer.index') }}">
            <svg class="icon icon-tabler icon-tabler-building w-14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Employers
            </h5>
        </a>

        <a class="flex w-40 max-w-sm flex-col items-center rounded-lg border border-gray-200 bg-white p-6 shadow transition-all hover:translate-y-1 dark:border-gray-700 dark:bg-gray-800"
           href="{{ route('job.index') }}">
            <svg class="icon icon-tabler icon-tabler-file-description w-14" xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                 stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                <path d="M9 17h6"></path>
                <path d="M9 13h6"></path>
            </svg>
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Jobs
            </h5>
        </a>

    </div>
@endsection
