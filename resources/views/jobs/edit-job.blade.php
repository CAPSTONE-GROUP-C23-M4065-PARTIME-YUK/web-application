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
                              for="category">Kategori Pekerjaan</label>
                      <select class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400" id="category" name="category">
                          <option value="">- Pilih Kategori -</option>
                          <option value="Sistem Analisis" {{ $job->category == 'Sistem Analisis' ? 'selected' : '' }}>Sistem Analisis</option>
                          <option value="Programmer" {{ $job->category == 'Programmer' ? 'selected' : '' }}>Programmer</option>
                          <option value="Technical Engineer" {{ $job->category == 'Technical Engineer' ? 'selected' : '' }}>Technical Engineer</option>
                          <option value="Networking Engineer" {{ $job->category == 'Networking Engineer' ? 'selected' : '' }}>Networking Engineer</option>
                          <option value="EDP Operator" {{ $job->category == 'EDP Operator' ? 'selected' : '' }}>EDP Operator</option>
                          <option value="System Administrator" {{ $job->category == 'System Administrator' ? 'selected' : '' }}>System Administrator</option>
                          <option value="IT Business Development" {{ $job->category == 'IT Business Development' ? 'selected' : '' }}>IT Business Development</option>
                          <option value="Tata Usaha" {{ $job->category == 'Tata Usaha' ? 'selected' : '' }}>Tata Usaha</option>
                          <option value="Desainer Grafis" {{ $job->category == 'Desainer Grafis' ? 'selected' : '' }}>Desainer Grafis</option>
                          <option value="Animator" {{ $job->category == 'Animator' ? 'selected' : '' }}>Animator</option>
                          <option value="Penulis" {{ $job->category == 'Penulis' ? 'selected' : '' }}>Penulis </option>
                          <option value="Project Manager" {{ $job->category == 'Project Manager' ? 'selected' : '' }}>Project Manager</option>
                          <option value="Web Designer" {{ $job->category == 'Web Designer' ? 'selected' : '' }}>Web Designer</option>
                          <option value="Web Programmer" {{ $job->category == 'Web Programmer' ? 'selected' : '' }}>Web Programmer</option>
                      </select>
                    @if ($errors->has('category'))
                        <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('category') }}</strong>
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
                              for="salary">Gaji</label>
                      <input class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                              id="salary" name="salary" type="number" placeholder="2000000" value="{{ old('salary', $job->salary) }}">
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
