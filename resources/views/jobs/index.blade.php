@extends('layouts.main')
@section('main')
<main class="z-20 mx-auto flex w-[1024px] flex-1 flex-col gap-y-24 py-12">
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <div class="flex justify-between bg-white p-4 pb-4 dark:bg-gray-900">
          <a href="{{ route('job.create') }}" class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                  type="button">Buat Lowongan</a>
          <label class="sr-only" for="table-search">Search</label>
          <div class="relative mt-1">
              <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                  <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                  </svg>
              </div>
              <input class="block w-80 rounded-md border border-gray-300 bg-gray-50 p-2 pl-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                      id="table-search" type="text" placeholder="Cari Lowongan">
          </div>

      </div>
        @if (Session::has('message'))
        <div id="alert-3" class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                {{ Session::get('message') }}
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        @endif
        <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
          <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                  <th class="px-6 py-3" scope="col">
                      #
                  </th>
                  <th class="px-6 py-3" scope="col">
                      Judul
                  </th>
                  <th class="px-6 py-3" scope="col">
                      Kategori Lowongan
                  </th>
                  <th class="px-6 py-3" scope="col">
                      Deskripsi
                  </th>
                  <th class="px-6 py-3" scope="col">
                      Requirement
                  </th>
                  <th class="px-6 py-3" scope="col">
                      Salary
                  </th>
                  <th class="px-6 py-3" scope="col">
                      <span class="sr-only">Action</span>
                  </th>
              </tr>
          </thead>
          <tbody>
            @forelse ($joblist as $jobitem)
                <tr
                class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">
                        {{ $numbtable++ }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $jobitem->title }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $jobitem->category }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $jobitem->description }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $jobitem->requirement }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $jobitem->salary }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="inline-flex overflow-hidden rounded-md text-slate-800 shadow-sm">
                            <a class="rounded-l-lg bg-accent4 px-4 py-2 text-sm font-medium transition-all hover:translate-y-1 focus:z-10 focus:text-blue-700 focus:ring-2 focus:ring-blue-700 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 dark:hover:text-white dark:focus:text-white dark:focus:ring-blue-500"
                                href="{{ route('job.edit', $jobitem->id) }}">
                                Edit
                            </a>
                            <form action="{{ route('job.destroy', $jobitem->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="rounded-r-md bg-accent3 px-4 py-2 text-sm font-medium text-gray-900 transition-all hover:translate-y-1 focus:z-10 focus:text-blue-700 focus:ring-2 focus:ring-blue-700 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 dark:hover:text-white dark:focus:text-white dark:focus:ring-blue-500"
                                        type="submit" href="#">
                                    Delete
                                </button>
                            </form>
                        </div>
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
                                Anda belum melakukan posting lowongan parttime. Silahkan posting lowongan sesuai dengan kebutuhan perusahaan Anda.
                            </div>
                        </div>
                    </th>
                </tr>
            @endforelse
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
</main>
@endsection
