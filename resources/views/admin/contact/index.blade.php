@extends('layouts.admin')
@section('main')
    @include('layouts.sidebar')

    <div class="flex min-h-screen flex-col items-center justify-center gap-8 p-4 py-16 sm:ml-64 md:flex-row">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="bg-white p-4 pb-4 dark:bg-gray-900">
                <label class="sr-only" for="table-search">Search</label>

            </div>
            <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-6 py-3" scope="col">
                            Name
                        </th>
                        <th class="px-6 py-3" scope="col">
                            Email
                        </th>
                        <th class="px-6 py-3" scope="col">
                            Message
                        </th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($dataContact as $listContact)
                    <tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                        <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                            scope="row">
                            {{$listContact->name}}
                        </th>
                        <td class="px-6 py-4">
                            {{$listContact->email}}
                        </td>
                        <td class="px-6 py-4">
                            {{$listContact->message}}
                        </td>
                    </tr>
                   @endforeach
                </tbody>
            </table>

        </div>

    </div>
@endsection
