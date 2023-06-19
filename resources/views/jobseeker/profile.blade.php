@extends('layouts.main')
@section('main')
    <section class="mx-auto flex h-full w-full max-w-5xl flex-1 flex-col bg-slate-100 p-10">
        @if (Auth::user()->jobSeeker === null)
            <div
                 class="mx-auto flex max-w-none rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Anda Belum
                            Melengkapi Profil Anda!</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Silahkan lengkapi profil Anda dengan data
                        yang valid.</p>
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
            <form action="/edit" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="input-group-1">Alamat
                    Email</label>
                <div class="relative mb-6">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                    </div>
                    <input class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-3 pl-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                           id="input-group-1" name="email" type="email" value="{{ auth()->user()->email }}" required
                           placeholder="">
                </div>
                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="input-group-2">Nama
                    Lengkap</label>
                <div class="relative mb-6">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-gray-600">
                        <svg class="icon icon-tabler icon-tabler-user" xmlns="http://www.w3.org/2000/svg" width="20"
                             height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                        </svg>
                    </div>
                    <input class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-3 pl-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                           id="input-group-2" name="name" type="text" value="{{ auth()->user()->name }}" required
                           placeholder="">
                </div>

                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="message">Alamat</label>
                <textarea class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                          id="message" name="address" rows="4" placeholder="">{{ auth()->user()->jobSeeker->address }}</textarea>

                <label class="mb-2 mt-6 block text-sm font-medium text-gray-900 dark:text-white" for="input-group-2">Nomor
                    Telepon</label>
                <div class="relative mb-12">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-gray-600">
                        <svg class="icon icon-tabler icon-tabler-phone" xmlns="http://www.w3.org/2000/svg" width="20"
                             height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                  d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                            </path>
                        </svg>
                    </div>
                    <input name="phone_number" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-3 pl-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                           id="input-group-2" type="text" value="{{ auth()->user()->jobSeeker->phone_number }}"
                           title="Nomor telepon hanya boleh berisi angka" required pattern="[0-9]+" placeholder=" " required
                           autocomplete="off" placeholder="">
                </div>
                <div class="group relative z-0 mb-6 w-full">
                    <label class="absolute -z-10 origin-[0] -translate-y-6 scale-75 transform text-xl text-gray-900 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500"
                           for="floating_email">Resume</label>
                    @if (auth()->user()->jobSeeker->resume === null)
                        <span>Anda belum mengupload resume. Silahkan upload Resume anda <a
                               class="py-3.5 px-1 text-blue-700 transition-all hover:text-blue-400"
                               href="{{ url('/resume') }}">di sini!</a><span>
                            @else
                                @foreach ($data as $jobSeeker)
                                    <embed class="h-[600px] w-full" src="{{ auth()->user()->jobSeeker->resume }}"
                                           type="application/pdf">
                                @endforeach
                    @endif
                </div>
                <button class="dark:focus:rinfg-blue-800 mb-4 h-11 w-fit rounded-lg bg-blue-700 px-5 py-3 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 sm:w-auto"
                        type="submit">Simpan Perubahan</button>
                <a class="mr-2 mb-2 h-1 rounded-lg bg-blue-700 px-5 py-3.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                   href="{{ url('/dashboard') }}">Kembali</a>
            </form>
            @if (session('success'))
                <div class="mt-4 text-green-500">{{ session('success') }}</div>
            @endif
        @endif
    </section>
@endsection
