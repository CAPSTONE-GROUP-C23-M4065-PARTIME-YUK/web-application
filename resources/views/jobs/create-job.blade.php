@extends('layouts.main')
@section('main')
  <main class="z-20 mx-auto flex w-[1024px] flex-1 flex-col gap-y-24 py-12">
    <section class="w-full bg-white dark:bg-gray-900">
      <div class="mx-auto max-w-2xl py-8 px-4 lg:py-16">
          <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Buat Lowongan</h2>
          <form action="{{ route('job.store') }}" method="POST">
              @csrf
              <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                @if ($cekprofil === null)
                @else
                    <input type="text" name="employer_id" value="{{ $cekprofil->id }}">
                @endif
                  <div class="sm:col-span-2">
                      <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="title">Judul
                          Lowongan</label>
                      <input class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                              id="title" name="title" type="text" placeholder="Backend Engineer">
                    @if ($errors->has('title'))
                        <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('title') }}</strong>
                    @endif
                  </div>
                  <div class="sm:col-span-2">
                      <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                              for="category">Kategori Pekerjaan</label>
                      <select class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400" id="category" name="category">
                          <option value="">- Pilih Kategori -</option>
                          <option value="Sistem Analisis">Sistem Analisis</option>
                          <option value="Programmer">Programmer</option>
                          <option value="Technical Engineer">Technical Engineer</option>
                          <option value="Networking Engineer">Networking Engineer</option>
                          <option value="EDP Operator">EDP Operator</option>
                          <option value="System Administrator">System Administrator</option>
                          <option value="IT Business Development">IT Business Development</option>
                          <option value="Tata Usaha">Tata Usaha</option>
                          <option value="Desainer Grafis">Desainer Grafis</option>
                          <option value="Animator">Animator</option>
                          <option value="Penulis ">Penulis </option>
                          <option value="Project Manager">Project Manager</option>
                          <option value="Web Designer">Web Designer</option>
                          <option value="Web Programmer">Web Programmer</option>
                      </select>
                    @if ($errors->has('category'))
                        <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('category') }}</strong>
                    @endif
                  </div>
                  <div class="sm:col-span-2">
                      <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                              for="description">Deskripsi Lowongan</label>
                      <textarea class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                id="description" name="description" rows="8" placeholder=""></textarea>
                    @if ($errors->has('description'))
                        <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('description') }}</strong>
                    @endif
                  </div>
                  <div class="sm:col-span-2">
                      <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                              for="requirement">Requirements</label>
                      <textarea class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                id="requirement" name="requirement" rows="8" placeholder=""></textarea>
                    @if ($errors->has('requirement'))
                        <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('requirement') }}</strong>
                    @endif
                  </div>
                  <div class="sm:col-span-2">
                      <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                              for="salary">Gaji</label>
                      <input class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                              id="salary" name="salary" type="number" placeholder="2000000" min="0">
                    @if ($errors->has('salary'))
                        <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('salary') }}</strong>
                    @endif
                  </div>
              </div>
              @if ($cekprofil === null)
                <button data-popover-target="popover-right" data-popover-placement="right" type="button" class="text-white mb-3 bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-500 dark:focus:ring-red-600 cursor-not-allowed mt-6">Simpan Lowongan</button>
                <div data-popover id="popover-right" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                    <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                        <h3 class="font-semibold text-gray-900 dark:text-white">Pemberitahuan</h3>
                    </div>
                    <div class="px-3 py-2">
                        <p>Lengkapi profil perusahaan Anda terlebih dahulu sebelum membuat lowongan pekerjaan untuk perusahaan Anda.</p>
                    </div>
                    <div data-popper-arrow></div>
                </div>

                <a href="{{ route('profile.employer') }}">
                    <button class="text-white mb-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-800 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-6 transition-all hover:translate-x-1"
                        type="button">
                        Profile Perusahaan
                    </button>
                </a>
              @else
                <button class="focus:ring-primary-200 dark:focus:ring-primary-900 0 mt-4 inline-flex items-center rounded-lg bg-accent1 px-5 py-2.5 text-center text-sm font-medium text-white transition-all hover:translate-x-1 focus:ring-4 sm:mt-6"
                        type="submit">
                    Simpan Lowongan
                </button>
              @endif
          </form>
      </div>
    </section>
</main>
@endsection
