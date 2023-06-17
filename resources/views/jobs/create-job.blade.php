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
                    <input type="hidden" name="employer_id" value="{{ $cekprofil->id }}">
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
                              for="job_category_id">Kategori Pekerjaan</label>
                      <select class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400" id="job_category_id" name="job_category_id">
                          <option value="">- Pilih Kategori -</option>
                          @foreach ($jobcategory as $listcategory)
                              <option value="{{ $listcategory->id }}">{{ $listcategory->category }}</option>
                          @endforeach
                      </select>
                    @if ($errors->has('job_category_id'))
                        <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('job_category_id') }}</strong>
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
                              for="experience">Experience</label>
                      <input class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                              id="experience" name="experience" type="text" placeholder="1 - 2 Tahun">
                    @if ($errors->has('experience'))
                        <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('experience') }}</strong>
                    @endif
                  </div>
                  <div class="sm:col-span-2">
                      <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                              for="tipe_lowongan">Jenis Lowongan</label>
                      <select class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400" id="tipe_lowongan" name="tipe_lowongan">
                          <option value="">- Pilih Jenis -</option>
                          <option value="Freelance">Freelance</option>
                          <option value="Magang">Magang</option>
                          <option value="Remote">Remote</option>
                          <option value="Onsite">Onsite</option>
                          <option value="Kerja Kontrak">Kerja Kontrak</option>
                          <option value="Kerja Tetap">Kerja Tetap</option>
                      </select>
                    @if ($errors->has('tipe_lowongan'))
                        <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('tipe_lowongan') }}</strong>
                    @endif
                  </div>
                  <div class="sm:col-span-2">
                      <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                              for="salary">Gaji (Sesuaikan Format)</label>
                      <input class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                              id="salary" name="salary" type="text" placeholder="2.000.000 - 4.000.000" oninput="this.value=this.value.replace(/[^ -.0-9]/, '')">
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
