@extends('layouts.main')
@section('main')

<section class="flex h-full flex-1 flex-col bg-slate-100 p-10">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                    Company
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
                @foreach ( $data as $jobs)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">
                        {{ $numb++ }}
                        </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $jobs->company_name }}
                    </th>
                    <td class="px-6 py-4">
                    {{ $jobs->category }}
                    </td>
                    <td class="px-6 py-4">
                    {{ $jobs->salary }}
                    </td>
                    <td>
                        <form action="{{ route('delete.loker', $jobs->id) }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button onclick="return confirm('Yakin')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection