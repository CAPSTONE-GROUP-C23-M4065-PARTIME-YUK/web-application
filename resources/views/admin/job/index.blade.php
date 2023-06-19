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
                            Nama Perusahaan
                        </th>
                        <th class="px-6 py-3" scope="col">
                            Email
                        </th>
                        <th class="px-6 py-3" scope="col">
                            Nama Perusahaan
                        </th>
                        <th class="px-6 py-3" scope="col">
                           Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($dataJobs as $listJobs)
                    <tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $numb++ }}
                         </td>
                        <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                            scope="row">
                            {{ $listJobs->company_name }}
                        </th>
                        <td class="px-6 py-4">
                           {{ $listJobs->company_email }}
                        </td>
                        <td class="px-6 py-4">
                           {{ $listJobs->category }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="inline-flex overflow-hidden rounded-md text-slate-800 shadow-sm">
                                <a class="rounded-l-lg bg-accent4 px-4 py-2 text-sm font-medium transition-all hover:translate-y-1 focus:z-10 focus:text-blue-700 focus:ring-2 focus:ring-blue-700 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 dark:hover:text-white dark:focus:text-white dark:focus:ring-blue-500"
                                    href="{{ url ('/detail-jobs/' . $listJobs->id) }}">
                                    Detail
                                </a>
                            </div>

                        </td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
            <nav class="flex items-center justify-between p-4 pt-4" aria-label="Table navigation">
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span
                          class="font-semibold text-gray-900 dark:text-white">1-20</span> of <span
                          class="font-semibold text-gray-900 dark:text-white">1000</span></span>
                <ul class="inline-flex items-center -space-x-px">
                    <li>
                        <a class="ml-0 block rounded-l-lg border border-gray-300 bg-white px-3 py-2 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                           href="#">
                            <span class="sr-only">Previous</span>
                            <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a class="border border-gray-300 bg-white px-3 py-2 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                           href="#">1</a>
                    </li>
                    <li>
                        <a class="border border-gray-300 bg-white px-3 py-2 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                           href="#">2</a>
                    </li>
                    <li>
                        <a class="z-10 border border-blue-300 bg-blue-50 px-3 py-2 leading-tight text-blue-600 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white"
                           href="#" aria-current="page">3</a>
                    </li>
                    <li>
                        <a class="border border-gray-300 bg-white px-3 py-2 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                           href="#">...</a>
                    </li>
                    <li>
                        <a class="border border-gray-300 bg-white px-3 py-2 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                           href="#">100</a>
                    </li>
                    <li>
                        <a class="block rounded-r-lg border border-gray-300 bg-white px-3 py-2 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                           href="#">
                            <span class="sr-only">Next</span>
                            <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
@endsection
