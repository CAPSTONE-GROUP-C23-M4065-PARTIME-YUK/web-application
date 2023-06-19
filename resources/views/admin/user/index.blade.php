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
                            Role
                        </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($dataPengguna as $listPengguna)
                    <tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                        {{ $numb++}}
                        </td>
                      <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                          scope="row">
                          {{ $listPengguna->name }}
                      </th>
                      <td class="px-6 py-4">
                          {{ $listPengguna->email }}
                      </td>
                      <td class="px-6 py-4">
                          {{ $listPengguna->role }}
                      </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
            <div class="justify-center py-2 px-4">
                {{ $dataPengguna->links() }}
            </div>
        </div>

    </div>
@endsection
