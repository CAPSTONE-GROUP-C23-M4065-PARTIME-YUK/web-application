@extends('layouts.main')
@section('main')
    <main class="z-20 mx-auto flex w-[1024px] flex-1 flex-col gap-y-24 p-4 py-24">
        <section class="flex w-full" id="header">
            <h1 class="w-2/3 text-5xl font-bold text-slate-800">Jadilah <span class="under text-accent1">Mahasiswa</span>
                Sukses dengan PartTime.yuk
                Temukan Peluang <span class="text-accent1">Part-Time</span> dan <span class="text-accent1">Magang</span> yang
                Memperkaya
                Karirmu!</h1>
            <img class="w-1/3" src="{{ asset('images/hero-1.svg') }}" alt="">
        </section>
        <section class="flex w-full">
            <img class="w-1/3" src="{{ asset('images/hero-2.svg') }}" alt="">
            <div class="flex w-2/3 flex-col gap-y-2 pl-16">
                <h2 class="text-4xl font-semibold">Selamat datang di <span class="text-accent1">PartTime.yuk</span>
                </h2>
                <p class="mb-2 text-lg">Platform yang dirancang khusus untuk mahasiswa yang mencari peluang
                    part-time dan magang yang
                    sesuai dengan kebutuhan Anda. Di PartTimeYuk, kami memahami betapa berharganya waktu Anda
                    sebagai mahasiswa yang sibuk. Oleh karena itu, kami menawarkan berbagai peluang pekerjaan yang
                    fleksibel dan relevan dengan minat serta bidang studi Anda.</p>
                <a class="group relative inline-block w-fit text-sm font-medium text-white focus:outline-none focus:ring active:text-indigo-500"
                   href="/download">
                    <span
                          class="absolute inset-0 translate-x-1 translate-y-1 bg-accent2 transition-transform group-hover:translate-y-0 group-hover:translate-x-0"></span>

                    <span class="relative block border border-accent1 bg-accent1 px-8 py-3 text-xl">
                        Mulai Sekarang
                    </span>
                </a>
            </div>
        </section>

        <section class="grid w-full grid-cols-3 gap-8">
            <div
                 class="flex flex-col items-center justify-evenly gap-y-2 overflow-hidden rounded-lg border-2 border-accent1 p-4 py-8 text-center">
                <svg class="icon icon-tabler icon-tabler-user-check h-24 w-1/3 text-accent1"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
                    <path d="M15 19l2 2l4 -4"></path>
                </svg>
                <h3 class="flex h-14 items-center justify-center text-2xl font-semibold text-accent1">Peluang
                    Pekerjaan yang Sesuai</h3>
                <p>Temukan ribuan lowongan part-time dan magang yang relevan dengan bidang studi Anda. Mulai dari
                    perusahaan teknologi, media kreatif, hingga startup yang sedang berkembang pesat.</p>
            </div>
            <div
                 class="flex flex-col items-center gap-y-2 overflow-hidden rounded-lg border-2 border-accent1 p-4 py-8 text-center">
                <svg class="icon icon-tabler icon-tabler-24-hours h-24 w-1/3 text-accent1"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"></path>
                    <path d="M4 13a8.094 8.094 0 0 0 3 5.24"></path>
                    <path d="M11 15h2a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-1a1 1 0 0 0 -1 1v1a1 1 0 0 0 1 1h2"></path>
                    <path d="M17 15v2a1 1 0 0 0 1 1h1"></path>
                    <path d="M20 15v6"></path>
                </svg>
                <h3 class="flex h-14 items-center justify-center text-2xl font-semibold text-accent1">Jadwal yang
                    Fleksibel</h3>
                <p>Kami memahami prioritas utama Anda sebagai mahasiswa. Oleh karena itu, Anda dapat menyesuaikan
                    jadwal kerja Anda dengan jadwal kuliah dan kegiatan lainnya.</p>
            </div>
            <div
                 class="flex flex-col items-center gap-y-2 overflow-hidden rounded-lg border-2 border-accent1 p-4 py-8 text-center">
                <svg class="icon icon-tabler icon-tabler-certificate h-24 w-1/3 text-accent1"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M15 15m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                    </path>
                    <path d="M6 9l12 0"></path>
                    <path d="M6 12l3 0"></path>
                    <path d="M6 15l2 0"></path>
                </svg>
                <h3 class="flex h-14 items-center justify-center text-2xl font-semibold text-accent1">Pengalaman
                    Berharga</h3>
                <p>Peluang part-time dan magang di PartTimeYuk membantu Anda mendapatkan pengalaman kerja yang
                    berharga sejak dini. Ini akan memberikan Anda keuntungan yang signifikan dalam memasuki pasar
                    kerja setelah lulus.</p>
            </div>
        </section>
    </main>
    <section class="w-full bg-accent1">
        <div class="mx-auto flex w-[1024px] flex-col items-center gap-y-4 p-8">
            <p class="text-2xl text-white">
                Bergabunglah dengan PartTimeYuk sekarang dan mulailah menjelajahi peluang part-time dan magang yang
                dapat membantu Anda mencapai kesuksesan di dunia kerja.
            </p>
            <a class="flex w-fit items-center justify-center gap-2 rounded-xl border-4 border-black bg-pink-100 px-8 py-4 text-xl font-bold shadow-[6px_6px_0_0_#000] transition hover:shadow-none focus:outline-none focus:ring active:bg-pink-50"
               href="/blog">
                Daftar Sekarang
            </a>
        </div>
    </section>
@endsection
