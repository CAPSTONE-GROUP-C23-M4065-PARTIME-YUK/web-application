@extends('layouts.admin')
@section('main')
@include('layouts.sidebar')
<div class="flex min-h-screen flex-col items-center justify-center gap-8 p-4 py-16 sm:ml-64 md:flex-row">
    <section class="w-1/2 rounded-lg bg-white dark:bg-gray-900">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $dataJobSeeker->name }}</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $dataJobSeeker->email }}</p>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $dataJobSeeker->phone_number }}</p>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $dataJobSeeker->address }}</p>
        </a>
    </section>
</div>
@endsection