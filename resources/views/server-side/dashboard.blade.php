<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 flex flex-wrap gap justify-center gap-8">
            <div class="w-full max-w-sm rounded overflow-hidden shadow-lg bg-white border-4 border-indigo-200 border-l-indigo-500">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Data Pengguna | <small class="text-gray-600">total pengguna</small></div>
                    <p class="text-indigo-700 text-[44px]">
                        <span class="bi bi-people"></span>
                        <strong class="text-gray-600">{{ $totalPengguna }}</strong>
                    </p>
                    <p class="text-right font-bold text-indigo-700">
                        <a href="">Lihat data</a>
                    </p>
                </div>
            </div>
            <div class="w-full max-w-sm rounded overflow-hidden shadow-lg bg-white border-4 border-red-200 border-l-red-500">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Data Employers | <small class="text-gray-600">total employer</small></div>
                    <p class="text-red-700 text-[44px]">
                        <span class="bi bi-buildings"></span>
                        <strong class="text-gray-600">{{ $totalEmployers }}</strong>
                    </p>
                    <p class="text-right font-bold text-red-700">
                        <a href="">Lihat data</a>
                    </p>
                </div>
            </div>
            <div class="w-full max-w-sm rounded overflow-hidden shadow-lg bg-white border-4 border-green-200 border-l-green-500">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Data Job Seekers | <small class="text-gray-600">total job seeker</small></div>
                    <p class="text-green-700 text-[44px]">
                        <span class="bi bi-person-check"></span>
                        <strong class="text-gray-600">{{ $totalJobSeekers }}</strong>
                    </p>
                    <p class="text-right font-bold text-green-700">
                        <a href="">Lihat data</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
