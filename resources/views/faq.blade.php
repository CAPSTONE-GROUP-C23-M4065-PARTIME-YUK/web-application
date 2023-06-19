@extends('layouts.main')
@section('main')
    <main class="z-20 mx-auto flex w-[1024px] flex-1 flex-col items-center gap-4 p-4 py-10">
        <img class="" src="{{ asset('images/emblem.png') }}" alt="Logo">
        <h1 class="w-full text-center text-3xl font-semibold mb-6">Frequently Asked Question</h1>

        <div class="w-full" id="accordion-collapse" data-accordion="collapse">
            <h2 id="accordion-collapse-heading-1">
                <button class="flex w-full items-center justify-between rounded-t-xl border border-b-0 border-gray-200 p-5 text-left font-medium text-gray-500 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800 dark:focus:ring-gray-800"
                        data-accordion-target="#accordion-collapse-body-1" type="button" aria-expanded="true"
                        aria-controls="accordion-collapse-body-1">
                    <span>Bagaimana cara membuat akun?</span>
                    <svg class="h-6 w-6 shrink-0 rotate-180" data-accordion-icon fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div class="hidden" id="accordion-collapse-body-1" aria-labelledby="accordion-collapse-heading-1">
                <div class="border border-b-0 border-gray-200 p-5 dark:border-gray-700 dark:bg-gray-900">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Membuat akun sangat mudah! Cukup klik tombol "Sign Up"
                        yang terletak di pojok kanan atas halaman. Isi detail Anda, termasuk nama, alamat email, dan kata
                        sandi. Setelah selesai, Anda akan memiliki akun sendiri untuk mengakses semua fitur dan manfaat yang
                        tersedia.</p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-2">
                <button class="flex w-full items-center justify-between border border-b-0 border-gray-200 p-5 text-left font-medium text-gray-500 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800 dark:focus:ring-gray-800"
                        data-accordion-target="#accordion-collapse-body-2" type="button" aria-expanded="false"
                        aria-controls="accordion-collapse-body-2">
                    <span>Bagaimana cara memposting lowongan pekerjaan?</span>
                    <svg class="h-6 w-6 shrink-0" data-accordion-icon fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div class="hidden" id="accordion-collapse-body-2" aria-labelledby="accordion-collapse-heading-2">
                <div class="border border-b-0 border-gray-200 p-5 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Untuk memposting lowongan pekerjaan, Anda perlu daftar
                        dan login sebagai employer. Masuk ke akun Anda dan arahkan ke bagian "Posting Lowongan Kerja". Isi
                        detail
                        pekerjaan, seperti judul pekerjaan, deskripsi, persyaratan, dan lokasi. Setelah dikirim, lowongan
                        pekerjaan Anda akan terdaftar di platform kami, menarik calon kandidat.

                    </p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-3">
                <button class="flex w-full items-center justify-between border border-gray-200 p-5 text-left font-medium text-gray-500 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800 dark:focus:ring-gray-800"
                        data-accordion-target="#accordion-collapse-body-3" type="button" aria-expanded="false"
                        aria-controls="accordion-collapse-body-3">
                    <span>Bagaimana cara mencari pekerjaan?</span>
                    <svg class="h-6 w-6 shrink-0" data-accordion-icon fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div class="hidden" id="accordion-collapse-body-3" aria-labelledby="accordion-collapse-heading-3">
                <div class="border border-t-0 border-gray-200 p-5 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Mencari pekerjaan impian Anda sangatlah mudah! Gunakan
                        kotak pencarian di halaman jobs untuk memasukkan kata kunci terkait posisi atau lokasi pekerjaan
                        yang Anda
                        inginkan. Anda juga dapat menjelajahi berbagai kategori pekerjaan atau
                        menyaring hasil berdasarkan preferensi Anda.</p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-4">
                <button class="flex w-full items-center justify-between border border-gray-200 p-5 text-left font-medium text-gray-500 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800 dark:focus:ring-gray-800"
                        data-accordion-target="#accordion-collapse-body-4" type="button" aria-expanded="false"
                        aria-controls="accordion-collapse-body-4">
                    <span>Bagaimana saya bisa melamar pekerjaan?</span>
                    <svg class="h-6 w-6 shrink-0" data-accordion-icon fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div class="hidden" id="accordion-collapse-body-4" aria-labelledby="accordion-collapse-heading-4">
                <div class="border border-t-0 border-gray-200 p-5 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Untuk saat ini platform kami hanya menyediakan fitur
                        untuk melihat lowongan, anda bisa melakukan apply pekerjaan sesuai deskripsi dari lowongan. Namun
                        anda masih bisa menikmati fitur kami yaitu bookmark pekerjaan</p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-5">
                <button class="flex w-full items-center justify-between border border-gray-200 p-5 text-left font-medium text-gray-500 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800 dark:focus:ring-gray-800"
                        data-accordion-target="#accordion-collapse-body-5" type="button" aria-expanded="false"
                        aria-controls="accordion-collapse-body-5">
                    <span>Bagaimana cara mengedit informasi profil saya?</span>
                    <svg class="h-6 w-6 shrink-0" data-accordion-icon fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div class="hidden" id="accordion-collapse-body-5" aria-labelledby="accordion-collapse-heading-5">
                <div class="border border-t-0 border-gray-200 p-5 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Untuk mengedit profil Anda, masuk ke akun Anda dan buka
                        bagian "Pengaturan Profil". Di sini, Anda dapat memperbarui informasi pribadi, detail kontak, dan
                        mengunggah resume terbaru. Menjaga profil Anda tetap terkini akan meningkatkan peluang Anda untuk
                        diperhatikan oleh employer.</p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-6">
                <button class="flex w-full items-center justify-between border border-gray-200 p-5 text-left font-medium text-gray-500 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800 dark:focus:ring-gray-800"
                        data-accordion-target="#accordion-collapse-body-6" type="button" aria-expanded="false"
                        aria-controls="accordion-collapse-body-6">
                    <span>Bagaimana cara menghubungi dukungan jika saya memiliki pertanyaan atau masalah?</span>
                    <svg class="h-6 w-6 shrink-0" data-accordion-icon fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div class="hidden" id="accordion-collapse-body-6" aria-labelledby="accordion-collapse-heading-5">
                <div class="border border-t-0 border-gray-200 p-5 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Jika Anda memiliki pertanyaan atau mengalami masalah,
                        tim dukungan kami siap membantu Anda. Anda dapat menghubungi kami melalui halaman "Contact Us". Kami
                        berkomitmen untuk memberikan respons yang cepat dan
                        membantu agar pengalaman Anda berjalan lancar.</p>
                </div>
            </div>
        </div>

    </main>
@endsection
