@extends('layouts.admin')
@section('main')
    @include('layouts.sidebar')

    <div class="flex min-h-screen flex-col items-center justify-center gap-8 p-4 py-16 sm:ml-64 md:flex-row">
        <section class="w-full bg-white dark:bg-gray-900 lg:w-[800px]">
            <div class="mx-auto max-w-2xl py-8 px-4 lg:py-16">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Buat Lowongan</h2>
                <form action="{{ route('job.store') }}" method="POST">
                    @csrf
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="title">Judul
                                Lowongan</label>
                            <input class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                   id="title" name="title" type="text" placeholder="Tuliskan judul lowongan"
                                   required="">
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                   for="job_category_id">Kategori Pekerjaan</label>
                            <select class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                    id="job_category_id" name="job_category_id">
                                <option selected="">Pilih Kategori</option>
                                <option value="1">Sosial</option>
                                <option value="2">Engineering</option>
                                <option value="3">Teknologi Informasi</option>
                                <option value="4">Kesehatan</option>
                            </select>
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                   for="campus_id">Dekat Kampus (opsional)</label>
                            <select class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                    id="campus_id" name="campus_id">
                                <option selected="">Pilih Kampus Terdekat</option>
                                <option value="1">UNPAD</option>
                                <option value="2">ITB</option>
                                <option value="3">UNAIR</option>
                                <option value="4">UI</option>
                            </select>
                        </div>
                        <div class="sm:col-span-2">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                   for="salary">Gaji</label>
                            <input class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                   id="salary" name="salary" type="number" placeholder="2.000.000" required="">
                        </div>
                        <div class="sm:col-span-2">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                   for="location">Alamat Lokasi</label>
                            <textarea class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                      id="location" name="location" rows="8" placeholder="Jl.Sayang, Bandung, Jawa Barat"></textarea>
                        </div>

                        <div class="sm:col-span-2">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                   for="requirement">Requirements</label>
                            <textarea class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                      id="requirement" name="requirement" rows="8" placeholder=""></textarea>
                        </div>
                        <div class="sm:col-span-2">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                   for="description">Deskripsi Lowongan</label>
                            <textarea class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                      id="description" name="description" rows="8" placeholder=""></textarea>
                        </div>
                    </div>
                    <button class="focus:ring-primary-200 dark:focus:ring-primary-900 0 mt-4 inline-flex items-center rounded-lg bg-accent1 px-5 py-2.5 text-center text-sm font-medium text-white transition-all hover:translate-x-1 focus:ring-4 sm:mt-6"
                            type="submit">
                        Buat Lowongan
                    </button>
                </form>
            </div>
        </section>
    </div>
@endsection
