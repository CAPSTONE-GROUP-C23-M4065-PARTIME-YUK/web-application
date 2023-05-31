@extends('layouts.admin')
@section('main')
    @include('layouts.sidebar')
    <div class="flex min-h-screen flex-col items-center justify-center gap-8 p-4 sm:ml-64 md:flex-row">
        <div class="py-12">
            <div class="gap mx-auto flex max-w-7xl flex-wrap justify-center gap-8 sm:px-6 lg:px-8">
                <div
                     class="w-full max-w-sm overflow-hidden rounded border-4 border-indigo-200 border-l-indigo-500 bg-white shadow-lg">
                    <div class="px-6 py-4">
                        <div class="mb-2 text-xl font-bold">Data Pengguna | <small class="text-gray-600">total
                                pengguna</small>
                        </div>
                        <p class="text-[44px] text-indigo-700">
                            <span class="bi bi-people"></span>
                            <strong class="text-gray-600">{{ $totalPengguna }}</strong>
                        </p>
                        <p class="text-right font-bold text-indigo-700">
                            <a href="/">Lihat data</a>
                        </p>
                    </div>
                </div>
                <div
                     class="w-full max-w-sm overflow-hidden rounded border-4 border-red-200 border-l-red-500 bg-white shadow-lg">
                    <div class="px-6 py-4">
                        <div class="mb-2 text-xl font-bold">Data Employers | <small class="text-gray-600">total
                                employer</small>
                        </div>
                        <p class="text-[44px] text-red-700">
                            <span class="bi bi-buildings"></span>
                            <strong class="text-gray-600">{{ $totalEmployers }}</strong>
                        </p>
                        <p class="text-right font-bold text-red-700">
                            <a href="{{ route('employer.index') }}">Lihat data</a>
                        </p>
                    </div>
                </div>
                <div
                     class="w-full max-w-sm overflow-hidden rounded border-4 border-green-200 border-l-green-500 bg-white shadow-lg">
                    <div class="px-6 py-4">
                        <div class="mb-2 text-xl font-bold">Data Job Seekers | <small class="text-gray-600">total job
                                seeker</small></div>
                        <p class="text-[44px] text-green-700">
                            <span class="bi bi-person-check"></span>
                            <strong class="text-gray-600">{{ $totalJobSeekers }}</strong>
                        </p>
                        <p class="text-right font-bold text-green-700">
                            <a href="{{ route('jobseeker.index') }}">Lihat data</a>
                        </p>
                    </div>
                </div>
                <div
                     class="w-full max-w-sm overflow-hidden rounded border-4 border-accent2/50 border-l-accent2 bg-white shadow-lg">
                    <div class="px-6 py-4">
                        <div class="mb-2 text-xl font-bold">Data Lowongan | <small class="text-gray-600">total lowongan
                            </small></div>
                        <p class="text-[44px] text-green-700">
                            <span class="bi bi-person-check"></span>
                            <strong class="text-gray-600">{{ $totalJobSeekers }}</strong>
                        </p>
                        <p class="text-right font-bold text-green-700">
                            <a href="{{ route('job.index') }}">Lihat data</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
