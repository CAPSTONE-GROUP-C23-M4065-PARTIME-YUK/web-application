@extends('layouts.main')
@section('main')

<section  class="flex h-full flex-1 flex-col bg-slate-100 p-10 justify-center">

<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="p-5">
    <img class="rounded-full mx-auto" src="{{ asset('images/employers-logo/' . $jobWithEmployer->company_logo) }}" alt="image description">
    </div>
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $jobWithEmployer->company_name }}</h5>

        <p>Title</p>
        <h2 class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $jobWithEmployer->title }}</h2>
        <p>Description</p>
        <p class="mb-5 text-gray-700 dark:text-gray-400">{{ $jobWithEmployer->description }}</p>

        <p>Requirement</p>
        <p class="mb-5 text-gray-700 dark:text-gray-400">{{ $jobWithEmployer->requirement }}</p>

        <p>salary</p>
        <p class="mb-5 text-gray-700 dark:text-gray-400">{{ $jobWithEmployer->salary }}</p>

        <p>Company Description</p>
        <p class="mb-5 text-gray-700 dark:text-gray-400">{{ $jobWithEmployer->company_description }}</p>
        
        <p>Company Website</p>
        <p class="mb-5 text-gray-700 dark:text-gray-400">{{ $jobWithEmployer->Website }}</p>
        
        <p>Company Email</p>
        <p class="mb-5 text-gray-700 dark:text-gray-400">{{ $jobWithEmployer->company_email }}</p>

        <p>Company Phone</p>
        <p class="mb-5 text-gray-700 dark:text-gray-400">{{ $jobWithEmployer->company_phone }}</p>
        
        <p>Company province</p>
        <p class="mb-5 text-gray-700 dark:text-gray-400">{{ $jobWithEmployer->company_province }}</p>

        <p>Company Regency</p>
        <p class="mb-5 text-gray-700 dark:text-gray-400">{{ $jobWithEmployer->company_regency }}</p>

        <p>Company address</p>
        <p class="mb-5 text-gray-700 dark:text-gray-400">{{ $jobWithEmployer->company_address }}</p>

      <form action="/save-job" method="POST">
        @csrf
        <input type="hidden" name="job_id" value="{{ $jobWithEmployer->id }}">
        <input type="hidden" name="job_seeker_id" value="{{ Auth::user()->id }}">
        <button type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Save</button>
      </form>
    </div>
</div>
</section>
@endsection