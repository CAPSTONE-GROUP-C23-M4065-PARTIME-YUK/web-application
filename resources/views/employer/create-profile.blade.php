@extends('layouts.main')
@section('main')
    <div class="p-10">
        <section class="w-full rounded-lg bg-white dark:bg-gray-900">
          <div class="mx-auto max-w-2xl px-4 py-8 lg:py-16">
              @if (Session::has('message'))
              <div id="alert-3" class="flex p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                  <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                  <span class="sr-only">Info</span>
                  <div class="ml-3 text-sm font-medium">
                      {{ Session::get('message') }}
                  </div>
                  <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                      <span class="sr-only">Close</span>
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </button>
              </div>
              @endif
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Detail Perusahaan</h2>
                <form action="{{ route('employer.store') }}" method="POST"
                      enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="mb-4 grid gap-4 sm:mb-5 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="name">
                                Nama</label>
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                   id="name" type="text" value="{{ Auth::user()->name }}" readonly>
                        </div>
                        <div class="sm:col-span-2">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="company_name">
                                Nama Perusahaan</label>
                            <input class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                   id="company_name" name="company_name" type="text" placeholder="PT. Santosa Jaya"
                                   >
                            @if ($errors->has('company_name'))
                              <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('company_name') }}</strong>
                            @endif
                        </div>
                        <div class="sm:col-span-2">
                            <label class="mb-2 block text-sm font-medium text-gray-900" for="file_input">Logo
                                Perusahaan</label>
                            <input class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none capitalize"
                                   id="file_input" name="company_logo" type="file" aria-describedby="file_input_help">
                            <p class="mt-1 text-sm text-gray-500" id="file_input_help">PNG,JPG</p>
                            @if ($errors->has('company_logo'))
                              <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('company_logo') }}</strong>
                            @endif
                        </div>
                        <div class="sm:col-span-2">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                   for="company_website">
                                Website Perusahaan</label>
                            <input class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                   id="company_website" name="company_website" type="text" placeholder="sentosajaya.com"
                                   >
                          @if ($errors->has('company_website'))
                            <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('company_website') }}</strong>
                          @endif
                        </div>
                        <div class="sm:col-span-2">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="email">
                                Email Perusahaan</label>
                            <input class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                   id="email" name="company_email" type="email" placeholder="santosajaya.business@gmail.com">
                          @if ($errors->has('company_email'))
                            <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('company_email') }}</strong>
                          @endif
                        </div>
                        <div class="sm:col-span-2">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                   for="company_phone">
                                No.Telpon Perusahaan</label>
                            <input class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                   id="company_phone" name="company_phone" type="text" maxlength="13" placeholder="082876######">
                          @if ($errors->has('company_phone'))
                            <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('company_phone') }}</strong>
                          @endif
                        </div>
                        <div class="sm:col-span-2">
                          <label for="company_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tentang Perusahaan</label>
                          <textarea id="company_description" name="company_description" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Lengkapi alamat perusahaan dengan benar..."></textarea>
                          @if ($errors->has('company_description'))
                            <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('company_description') }}</strong>
                          @endif
                        </div>
                        <div class="sm:col-span-2">
                          <label for="company_province" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>
                          <input list="province" name="company_province" class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400" placeholder="Pilih/cari provinsi">
                          <datalist id="province">
                            @foreach ($getprovinsi as $listprovinsi)
                              <option value="{{ $listprovinsi->name }}">
                            @endforeach
                          </datalist>
                          @if ($errors->has('company_province'))
                            <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('company_province') }}</strong>
                          @endif
                        </div>
                        <div class="sm:col-span-2">
                          <label for="company_regency" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota/Kabupaten</label>
                          <input list="regency" name="company_regency" class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400" placeholder="Pilih/cari kabupaten">
                          <datalist id="regency">
                            @foreach ($getkota as $listkota)
                              <option value="{{ $listkota->name }}">
                            @endforeach
                          </datalist>
                          @if ($errors->has('company_regency'))
                            <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('company_regency') }}</strong>
                          @endif
                        </div>
                        <div class="sm:col-span-2">
                          <label for="company_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Lengkap Perusahaan</label>
                          <textarea id="company_address" name="company_address" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Lengkapi alamat perusahaan dengan benar..."></textarea>
                          @if ($errors->has('company_address'))
                            <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('company_address') }}</strong>
                          @endif
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 rounded-lg bg-accent1 px-5 py-2.5 text-center text-sm font-medium text-white transition-all hover:translate-x-1 focus:outline-none focus:ring-4"
                                type="submit">
                            Simpan
                        </button>
                    </div>
                </form>

            </div>
        </section>

    </div>
@endsection
