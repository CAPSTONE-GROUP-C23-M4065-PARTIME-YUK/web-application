@extends('layouts.main')
@section('main')
    <section class="flex h-full flex-1 flex-col bg-slate-100 p-10">
        @if (Auth::user()->jobSeeker === null)
            <div
                 class="mx-auto flex max-w-none rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Anda Belum
                            Melengkapi Profil Anda!</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Anda tidak bisa Upload Resume karena anda
                        belum melengkapi profil anda, Silahkan lengkapi sesuai dengan data yang valid!</p>
                    <a class="inline-flex items-center rounded-lg bg-blue-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                       href="{{ url('/profile-jobseeker/create') }}">
                        Lengkapi Profil
                        <svg class="ml-2 -mr-1 h-4 w-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        @else
            <div
                 class="mx-auto max-w-sm rounded-lg border border-gray-200 bg-white p-6 shadow dark:border-gray-700 dark:bg-gray-800">
                <form action="/edit" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input name="phone_number" type="text" value="{{ auth()->user()->jobSeeker->phone_number }}" hidden>
                    <input name="address" type="text" value="{{ auth()->user()->jobSeeker->address }}" hidden>

                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                        resume</label>
                    <input class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
                           id="file_input" name="resume" type="file" aria-describedby="file_input_help" required>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PDF</p>

                    @error('resume')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror

                    <button class="mt-4 rounded-lg bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 py-2 px-4 text-sm font-medium text-white hover:bg-gradient-to-br focus:outline-none focus:ring-4 focus:ring-purple-300 dark:focus:ring-purple-800"
                            type="submit">Upload</button>
                </form>
            </div>
        @endif
    </section>
@endsection
