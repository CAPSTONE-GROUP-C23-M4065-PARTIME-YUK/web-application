@extends('layouts.admin')
@section('main')
@include('layouts.sidebar')
<div class="flex min-h-screen flex-col items-center justify-center gap-8 p-4 py-16 sm:ml-64 md:flex-row">
    <section class="w-1/2 rounded-lg bg-white dark:bg-gray-900">

        <div class="max-w-none mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex">
            <a href="#">
                <img class="rounded-t-lg h-auto max-w-lg" src="images/employers-logo/{{ $dataEmployer->company_logo }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $dataEmployer->company_name }}</h5>
                </a>
                <p class="text-lg">Pimpinan Perusahaan <strong>{{ $dataEmployer->name }}</strong></p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">website: <span class="text-blue-700">{{ $dataEmployer->company_website }}</span> | email: <span class="text-blue-700">{{ $dataEmployer->company_email }}</span> | no.telp: <span class="text-blue-700">{{ $dataEmployer->company_phone }}</span> | alamat: <span class="text-blue-700">{{ $dataEmployer->company_address }}</span>
                <p class="mb-4">{{ $dataEmployer->company_description }}</p>
            </div>
        </div>
    </section>
</div>
@endsection