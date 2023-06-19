@extends('layouts.admin')
@section('main')
    @include('layouts.sidebar')

    <div class="flex min-h-screen flex-col items-center justify-center gap-8 p-4 py-16 sm:ml-64 md:flex-row">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-6 py-3" scope="col">
                            #
                        </th>
                        <th class="px-6 py-3" scope="col">
                            Name
                        </th>
                        <th class="px-6 py-3" scope="col">
                            Email
                        </th>
                        <th class="px-6 py-3" scope="col">
                            Phone Number
                        </th>
                        <th class="px-6 py-3" scope="col">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($dataJobSeekers as $listJobSeekers)
                    <tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $numb++ }}
                        </td>
                        <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                            scope="row">
                            {{ $listJobSeekers->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $listJobSeekers->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $listJobSeekers->phone_number }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="inline-flex overflow-hidden rounded-md text-slate-800 shadow-sm">
                                <a class="rounded-l-lg bg-accent4 px-4 py-2 text-sm font-medium transition-all hover:translate-y-1 focus:z-10 focus:text-blue-700 focus:ring-2 focus:ring-blue-700 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 dark:hover:text-white dark:focus:text-white dark:focus:ring-blue-500"
                                    href="{{ url('/detail-jobseekers/' . $listJobSeekers->id) }}">
                                    Detail
                                </a>
                            </div>

                        </td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
            <div class="justify-center py-2 px-4">
                {{ $dataJobSeekers->links() }}
            </div>
        </div>

    </div>
@endsection
