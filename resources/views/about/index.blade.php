@extends('layouts.main')
@section('main')
<main class="z-20 mx-auto flex w-full flex-1 flex-col gap-y-8 p-4 py-16 xl:w-[1280px] items-center">
    <h1 class="text-center text-2xl font-bold mb-5">About Us</h1>
    <h3 class="text-center text-1xl font">Meet The Team Behind Partime.yuk</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 items-stretch">
        <div class="flex flex-wrap p-5 w-full sm:max-w-sm">
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-end px-4 pt-4">
                </div>
                <div class="flex flex-col items-center pb-10">
                    <img class="w-40 h-40 mb-3 rounded-full shadow-lg" src="{{asset('images/wildan.jpg')}}" alt="Bonnie image"/>
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white text-center">Ahmad Wildan</h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400">BackEnd Developer</span>
                    <span class="text-sm md:text-center text-gray-500 dark:text-gray-400 p-5">Mahasiswa (aktif) Politeknik Negeri Jember prodi D4-Teknik Informatika. Memiliki peran dalam bidang web programming dan content writing. Berprofesi sebagai freelance penulis artikel SEO dan pengembang website, pekerja keras, mampu bekerja secara individu maupun tim, antusias dan bermotivasi tinggi dengan kemampuan dalam bidang IT, dan bercita-cita menjadi full stack web developer.</span>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-accent1 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Email : ahmadwildan.smakensa@gmail.com</a>
                    </div>
                    <div class="flex mt-4">
                        <a href="https://www.linkedin.com/in/ahmadwildan-profile-url/"><img src="{{asset('images/linked1.svg')}}" width="30px" class="mt-1 ml-1"></a>
                        <a href="https://www.instagram.com/_ahmadwildan.me_/"><img src="{{asset('images/instagram1.svg')}}" width="40px" alt="" class="ml-5" srcset= ""></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="flex flex-wrap p-5 w-full sm:max-w-sm">
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-end px-4 pt-4">
                </div>
                <div class="flex flex-col items-center pb-10">
                    <img class="w-40 h-40 mb-3 rounded-full shadow-lg" src="{{asset('images/rizky2.jpg')}}" alt="Bonnie image"/>
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white text-center">Mohammad Rizky Ramadhani</h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400">BackEnd Developer</span>
                    <span class="text-sm md:text-center text-gray-500 dark:text-gray-400 p-5">Mahasiswa Politeknik Negeri Jember prodi Teknik Informatika. Memiliki peran dalam programmer website, mampu bekerja secara individu ataupun tim, Menyukai hal-hal yang berhubungan dengan IT. bercita-cita sebagai Fullstack Website Developer.</span>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-accent1 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Email : rama72720@gmail.com</a>
                    </div>
                    <div class="flex mt-4">
                      <a href="https://www.linkedin.com/in/mohammad-rizky-ramadhani-2932241b7/"><img src="{{asset('images/linked1.svg')}}" width="30px" class="mt-1 ml-1"></a>
                      <a href="https://www.instagram.com/rizkyyyramadhaniii/"><img src="{{asset('images/instagram1.svg')}}" width="40px" alt="" class="ml-5" srcset= ""></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="flex flex-wrap p-5 w-full sm:max-w-sm">
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-end px-4 pt-4">
                </div>
                <div class="flex flex-col items-center pb-10">
                    <img class="w-40 h-40 mb-3 rounded-full shadow-lg" src="{{asset('images/nabil.jpeg')}}" alt="Bonnie image"/>
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white text-center">Muhammad Nabil Fikri Sudjarpadi Putra</h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400">FrontEnd Developer</span>
                    <span class="text-sm md:text-center text-gray-500 dark:text-gray-400 p-5">Mahasiswa Univeristas Padjadjaran Teknik Informatika. Mengisi waktu luang dengan mengambil projek pembangungan website, sering bekerja secara individu, tetapi tidak menutup kemungkinan untuk berkolaborasi. Ingin terus berkembang dan belajar mengenai dunia web development.</span>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-accent1 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Email : mnabilfikrisp@gmail.com</a>
                    </div>
                    <div class="flex mt-4">
                      <a href="https://www.linkedin.com/in/mnabilfikrisp/"><img src="{{asset('images/linked1.svg')}}" width="30px" class="mt-1 ml-1"></a>
                      <a href="https://www.instagram.com/micanskuy/"><img src="{{asset('images/instagram1.svg')}}" width="40px" alt="" class="ml-5" srcset= ""></a>
                    </div>
                </div>
            </div>

        </div>
        <div class="flex flex-wrap p-5 w-full sm:max-w-sm">
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-end px-4 pt-4">
                </div>
                <div class="flex flex-col items-center pb-10">
                    <img class="w-40 h-40 mb-3 rounded-full shadow-lg" src="{{asset('images/isma.jpeg')}}" alt="Bonnie image"/>
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white text-center">Isma Fitria Risnandari</h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400">FrontEnd Developer</span>
                    <span class="text-sm md:text-center text-gray-500 dark:text-gray-400 p-5">Mahasiswa Politeknik Negeri Malang prodi Teknik Informatika. Mengisi waktu luang dengan mengeksplor hal baru dan senang membuat desain especially desain grafis. Namun juga sedang belajar mengenai dunia web development.</span>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-accent1 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Email : risnandari1212@gmail.com</a>
                    </div>
                    <div class="flex mt-4">
                      <a href="https://www.linkedin.com/in/isma-fitria-risnandari-34236224a/"><img src="{{asset('images/linked1.svg')}}" width="30px" class="mt-1 ml-1"></a>
                      <a href="https://www.instagram.com/risnandaxx_/"><img src="{{asset('images/instagram1.svg')}}" width="40px" alt="" class="ml-5" srcset= ""></a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</main>
@endsection