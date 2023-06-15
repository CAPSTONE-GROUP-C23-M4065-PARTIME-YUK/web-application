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
                    <a class="flex w-full items-center justify-center text-accent1" href="/">
                        <img src="{{ asset('images/emblem.png') }}" alt="">
                    </a>

                    <h1 class="mt-6 text-center text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
                        Selamat Datang Kembali!
                    </h1>

                    <p class="mt-4 text-center leading-relaxed text-gray-500">
                        Masuk ke akun Anda untuk melanjutkan perjalanan karier Anda.
                    </p>

                    <form class="mx-auto mb-0 mt-8 max-w-md space-y-4" action="{{ route('login') }}" method="POST" autocomplete="off">
                        @csrf
                        <div>
                            <label class="sr-only" for="email">Email</label>

                            <div class="relative">
                                <input class="pe-12 w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm" type="email"
                                       placeholder="Input email" name="email" />

                                <span class="end-0 absolute inset-y-0 grid place-content-center px-4">
                                    <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                    </svg>
                                </span>
                            </div>
                            @if ($errors->has('email'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                          class="font-medium">Oops!</span> {{ $errors->first('email') }}</p>
                            @endif
                        </div>

                        <div>
                            <label class="sr-only" for="password">Password</label>

                            <div class="relative">
                                <input class="pe-12 w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm" type="password"
                                       placeholder="Input password" name="password" />

                                <span class="end-0 absolute inset-y-0 grid place-content-center px-4">
                                    <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </span>
                            </div>
                            @if ($errors->has('password'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                          class="font-medium">Oops!</span> {{ $errors->first('password') }}</p>
                            @endif
                        </div>

                        <div class="flex items-center justify-between">
                            <p class="text-sm text-gray-500">
                                Belum punya akun?
                                <a class="underline" href="{{ route('register') }}">Daftar di sini.</a>
                            </p>

                            <button class="inline-block rounded-lg bg-accent1 px-5 py-3 text-sm font-medium text-white"
                                    type="submit">
                                Masuk
                            </button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </section>
@endsection
