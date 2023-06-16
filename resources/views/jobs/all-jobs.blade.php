@extends('layouts.main')
@section('main')

<section  class="flex h-full flex-1 flex-col bg-slate-100 p-10">
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <form>
     
    </form>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Company Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Salary
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $jobs)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            
                <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-white">
                    {{ $numb++ }}
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{ $jobs->company_name }}
                </th>
                <td class="px-6 py-4">
                    {{ $jobs->category }}
                </td>
                <td class="px-6 py-4">
                    {{ $jobs->salary  }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ url ($jobs->id.'/detail') }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                </td>
            </tr>
            @empty
            <tr
            class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                    scope="row" colspan="6">
                    <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            no vacancies available!
                        </div>
                    </div>
                </th>
            </tr>  
            @endforelse
        </tbody>
    </table>
</div>
</section>

@endsection