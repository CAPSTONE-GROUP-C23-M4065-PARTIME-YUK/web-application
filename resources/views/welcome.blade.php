<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('images/emblem.png') }}" rel="icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="flex min-h-screen flex-col bg-primary">
        <nav class="sticky top-0 left-0 z-40 w-full border-b border-gray-200 bg-primary">
            <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
                <a class="flex items-center transition-all hover:translate-x-1" href="https://flowbite.com/">
                    <img class="mr-3 h-8" src="{{ asset('images/emblem.png') }}" alt="Logo">
                    <span class="self-center whitespace-nowrap text-2xl font-semibold">PartTime.yuk</span>
                </a>
                <div class="hidden w-full items-center justify-between md:order-1 md:flex md:w-auto" id="navbar-sticky">
                    <ul
                        class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-slate-100 md:p-0">
                        <li>
                            <a class="block rounded bg-accent1 py-2 pl-3 pr-4 text-white md:bg-transparent md:p-0 md:text-accent1"
                               href="#" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 md:p-0 md:hover:bg-transparent md:hover:text-accent1"
                               href="#">About</a>
                        </li>
                        <li>
                            <a class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 md:p-0 md:hover:bg-transparent md:hover:text-accent1"
                               href="#">Services</a>
                        </li>
                        <li>
                            <a class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 md:p-0 md:hover:bg-transparent md:hover:text-accent1"
                               href="#">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="flex gap-x-2 md:order-2">
                    <button class="mr-3 rounded-lg bg-accent1 px-4 py-2 text-center text-sm font-medium text-white transition-all hover:translate-y-1 focus:outline-none focus:ring-4 focus:ring-blue-300 md:mr-0"
                            type="button">Login</button>
                    <button class="mr-3 rounded-lg border border-accent1 bg-white px-4 py-2 text-center text-sm font-medium text-accent1 transition-all hover:translate-y-1 focus:outline-none focus:ring-4 focus:ring-blue-300 md:mr-0"
                            type="button">Sign Up</button>
                </div>
        </nav>

        <!-- Page Content -->
        <main class="z-20 mx-auto flex w-[1024px] flex-1 flex-col gap-y-24 p-4 py-24">
            <section class="flex w-full" id="header">
                <h1 class="w-2/3 text-5xl font-bold text-slate-800">Jadilah <span
                          class="under text-accent1">Mahasiswa</span>
                    Sukses dengan PartTime.yuk
                    Temukan Peluang <span class="text-accent1">Part-Time</span> dan <span
                          class="text-accent1">Magang</span> yang Memperkaya
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
                        <path
                              d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
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
        <footer class="bg-white shadow">
            <div class="mx-auto w-full max-w-screen-xl p-4 md:py-8">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <a class="mb-4 flex items-center sm:mb-0" href="https://flowbite.com/">
                        <img class="mr-3 h-8" src="{{ asset('images/emblem.png') }}" alt="Logo">
                        <span class="self-center whitespace-nowrap text-2xl font-semibold">PartTime.yuk</span>
                    </a>
                    <ul class="mb-6 flex flex-wrap items-center text-sm font-medium text-gray-500 sm:mb-0">
                        <div class="mt-4 flex space-x-6 sm:mt-0 sm:justify-center">
                            <a class="mr-4 hover:underline md:mr-6" href="#">About</a>
                            <a class="hover:underline" href="#">Contact</a>
                            <a class="text-gray-500 hover:text-gray-900" href="#">
                                <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                          d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                          clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Facebook page</span>
                            </a>
                            <a class="text-gray-500 hover:text-gray-900" href="#">
                                <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                          d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                          clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Instagram page</span>
                            </a>
                            <a class="text-gray-500 hover:text-gray-900" href="#">
                                <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                          d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                                <span class="sr-only">Twitter page</span>
                            </a>
                            <a class="text-gray-500 hover:text-gray-900" href="#">
                                <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                          d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                          clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">GitHub account</span>
                            </a>
                        </div>
                    </ul>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
                <span class="block text-sm text-gray-500 sm:text-center">© 2023 <a class="hover:underline"
                       href="https://flowbite.com/">PartTime.yuk™</a>. All Rights
                    Reserved.</span>
            </div>
        </footer>
    </div>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
