@extends('layouts.main')
@section('main')
    <section class="flex h-full flex-1 flex-col bg-slate-100">
        <div class="flex-1 lg:grid lg:min-h-full lg:grid-cols-12">
            <aside
                   class="relative hidden h-16 items-center justify-center bg-gradient-to-r from-slate-100 to-accent1 lg:order-last lg:col-span-5 lg:flex lg:h-full xl:col-span-6">
                <img class="inset-0 h-1/2 w-1/2" src="{{ asset('images/register-hero-1.svg') }}" alt="Pattern" />
            </aside>

            <main class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6"
                  aria-label="Main">
                <div class="max-w-xl lg:max-w-3xl">
                    <a class="block text-accent1" href="/">
                        <img src="{{ asset('images/emblem.png') }}" alt="">
                    </a>

                    <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
                        Selamat Datang <span class="text-accentq">PartTime.yuk</span>
                    </h1>

                    <p class="mt-4 leading-relaxed text-gray-500">
                        Bergabunglah dengan platform kami untuk membuka berbagai peluang. Daftar hari ini untuk terhubung
                        dengan perusahaan, menemukan pekerjaan paruh waktu dan magang, serta memulai perjalanan kariermu.
                    </p>

                    <form class="mt-8 grid grid-cols-6 gap-6" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="col-span-6">
                            <label class="block text-sm font-medium text-gray-700" for="name">
                                Nama
                            </label>

                            <input class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                                   id="name" name="name" type="text" required />
                            @if ($errors->has('name'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                          class="font-medium">Oops!</span> {{ $errors->first('name') }}</p>
                            @endif
                        </div>

                        <div class="col-span-6">
                            <label class="block text-sm font-medium text-gray-700" for="Email">
                                Email
                            </label>

                            <input class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                                   id="Email" name="email" type="email" required />
                            @if ($errors->has('email'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                          class="font-medium">Oops!</span> {{ $errors->first('email') }}</p>
                            @endif
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label class="block text-sm font-medium text-gray-700" for="Password">
                                Password
                            </label>

                            <input class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                                   id="Password" name="password" type="password" required />
                            @if ($errors->has('password'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                          class="font-medium">Oops!</span> {{ $errors->first('password') }}</p>
                            @endif
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label class="block text-sm font-medium text-gray-700" for="PasswordConfirmation">
                                Password Confirmation
                            </label>

                            <input class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                                   id="PasswordConfirmation" name="password_confirmation" type="password" required />
                        </div>

                        <fieldset>
                            <label class="block text-sm font-medium text-gray-700" for="Role">
                                Daftar Sebagai
                            </label>

                            <div class="mt-4 flex gap-x-4">
                                <div class="mb-4 flex items-center">
                                    <input class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-accent1"
                                           id="role-option-1" name="role" type="radio" value="jobseeker" checked>
                                    <label class="ml-2 block text-sm font-medium text-gray-900" for="role-option-1">
                                        Jobseeker
                                    </label>
                                </div>

                                <div class="mb-4 flex items-center">
                                    <input class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-accent1"
                                           id="role-option-2" name="role" type="radio" value="employer">
                                    <label class="ml-2 block text-sm font-medium text-gray-900" for="role-option-2">
                                        Employer
                                    </label>
                                </div>
                            </div>

                        </fieldset>

                        <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                            <button
                                    class="inline-block shrink-0 rounded-md border border-accent1 bg-accent1 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-accent1 focus:outline-none focus:ring active:text-blue-500">
                                Daftarkan akun
                            </button>

                            <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                                Sudah punya akun?
                                <a class="text-gray-700 underline" href="{{ route('login') }}">Masuk di sini.</a>.
                            </p>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </section>
@endsection
