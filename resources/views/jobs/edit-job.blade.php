@extends('layouts.main')
@section('main')
  <main class="z-20 mx-auto flex w-[1024px] flex-1 flex-col gap-y-24 py-12">
    <section class="w-full bg-white dark:bg-gray-900">
      <div class="mx-auto max-w-2xl py-8 px-4 lg:py-16">
          <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Buat Lowongan</h2>
          <form action="{{ route('job.update', $job->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                  <div class="sm:col-span-2">
                      <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="title">Judul
                          Lowongan</label>
                      <input class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                              id="title" name="title" type="text" placeholder="Backend Engineer" value="{{ old('title', $job->title) }}">
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
                              <option value="{{ $listcategory->id }}" @if ($listcategory->id == $job->job_category_id) selected @endif>{{ $listcategory->category }}</option>
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
                                id="description" name="description" rows="8" placeholder="">{{ old('description', $job->description) }}</textarea>
                    @if ($errors->has('description'))
                        <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('description') }}</strong>
                    @endif
                  </div>
                  <div class="sm:col-span-2">
                      <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                              for="requirement">Requirements</label>
                      <textarea class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                id="requirement" name="requirement" rows="8" placeholder="">{{ old('requirement', $job->requirement) }}</textarea>
                    @if ($errors->has('requirement'))
                        <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('requirement') }}</strong>
                    @endif
                  </div>
                  <div class="sm:col-span-2">
                      <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                              for="experience">Experience</label>
                      <input class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                              id="experience" name="experience" type="text" placeholder="1 - 2 Tahun" value="{{ old('requirement', $job->experience) }}">
                    @if ($errors->has('experience'))
                        <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('experience') }}</strong>
                    @endif
                  </div>
                  <div class="sm:col-span-2">
                      <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                              for="tipe_lowongan">Jenis Lowongan</label>
                      <select class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400" id="tipe_lowongan" name="tipe_lowongan">
                          <option value="">- Pilih Jenis -</option>
                          <option value="Freelance" @if ($job->tipe_lowongan == "Freelance") selected @endif>Freelance</option>
                          <option value="Magang" @if ($job->tipe_lowongan == "Magang") selected @endif>Magang</option>
                          <option value="Remote" @if ($job->tipe_lowongan == "Remote") selected @endif>Remote</option>
                          <option value="Onsite" @if ($job->tipe_lowongan == "Onsite") selected @endif>Onsite</option>
                          <option value="Kerja Kontrak" @if ($job->tipe_lowongan == "Kerja Kontrak") selected @endif>Kerja Kontrak</option>
                          <option value="Kerja Tetap" @if ($job->tipe_lowongan == "Kerja Tetap") selected @endif>Kerja Tetap</option>
                      </select>
                    @if ($errors->has('tipe_lowongan'))
                        <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('tipe_lowongan') }}</strong>
                    @endif
                  </div>
                  <div class="sm:col-span-2">
                      <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                              for="salary">Gaji (Sesuaikan Format)</label>
                      <input class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                              id="salary" name="salary" type="text" placeholder="2000000" oninput="this.value=this.value.replace(/[^ -.0-9]/, '')" value="{{ old('salary', $job->salary) }}">
                    @if ($errors->has('salary'))
                        <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('salary') }}</strong>
                    @endif
                  </div>
              </div>
            <button class="focus:ring-primary-200 dark:focus:ring-primary-900 0 mt-4 inline-flex items-center rounded-lg bg-accent1 px-5 py-2.5 text-center text-sm font-medium text-white transition-all hover:translate-x-1 focus:ring-4 sm:mt-6"
                    type="submit">
                Perbarui Lowongan
            </button>
          </form>
      </div>
    </section>
</main>
@endsection
