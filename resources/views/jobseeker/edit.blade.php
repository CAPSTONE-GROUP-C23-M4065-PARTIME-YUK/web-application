@extends('layouts.main')
@section('main')

    <div class="flex min-h-screen flex-col items-center justify-center gap-8 p-4 py-16 sm:ml-64 md:flex-row">
        <section class="w-1/2 rounded-lg bg-white dark:bg-gray-900">
            <div class="mx-auto max-w-2xl px-4 py-8 lg:py-16">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Jobseeker Detail</h2>
                <form action="/{{ 'profile-jobseeker/update' }}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-4 grid gap-4 sm:mb-5 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="name">
                                Nama</label>
                            <input class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                   id="name" name="name" type="text" value="{{ auth()->user()->name }}" required="">
                        </div>
                        <div class="sm:col-span-2">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="email">
                                Email</label>
                            <input class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                   id="email" name="email" type="email" value="{{ auth()->user()->email }}" required="">
                        </div>
                        <div class="sm:col-span-2">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="phone_number">
                                Nomor Telepon</label>
                            <input class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                   id="phone_number" name="phone_number" type="text" value="08123456789" required="">
                        </div>
                        <div class="sm:col-span-2">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                   for="Address">Alamat</label>
                            <textarea class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                      id="Address" name="address" rows="8">Jl. Sukaraya no.45 RT 06 RW 07 Bandung, Jawa Barat</textarea>
                        </div>
                        <div class="sm:col-span-2">
                            <label class="mb-2 block text-sm font-medium text-gray-900" for="file_input">Unggah
                                Resume</label>
                            <input name="resume" class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none"
                                   id="file_input" type="file" aria-describedby="file_input_help">
                            <p class="mt-1 text-sm text-gray-500" id="file_input_help">PDF</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 rounded-lg bg-accent1 px-5 py-2.5 text-center text-sm font-medium text-white transition-all hover:translate-x-1 focus:outline-none focus:ring-4"
                                type="submit">
                            Perbarui Detail
                        </button>
                    </div>
                </form>

            </div>
        </section>

    </div>
@endsection
