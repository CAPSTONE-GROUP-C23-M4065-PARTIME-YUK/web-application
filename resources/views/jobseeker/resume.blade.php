@extends('layouts.main')
@section('main')

<section class="flex h-full flex-1 flex-col bg-slate-100 p-10">
    @if(Auth::user()->jobSeeker === null)
<div class="max-w-none mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex">
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Anda Belum Melengkapi Profil Anda!</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Anda tidak bisa Upload Resume karena anda belum melengkapi profil anda, Silahkan lengkapi sesuai dengan data yang valid!</p>
        <a href="{{ url ('/profile-jobseeker/create') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Lengkapi Profil
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
</div>
@else
<div class="max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-6">
    <form action="/edit" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="text" value="{{ auth()->user()->jobSeeker->phone_number }}" name="phone_number" hidden>
        <input type="text" value="{{ auth()->user()->jobSeeker->address }}" name="address" hidden>

        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 py-2 px-3" aria-describedby="file_input_help" id="file_input" type="file" name="resume" required>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PDF</p>

        @error('resume')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror

        <button type="submit" class="mt-4 bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 text-white text-sm font-medium rounded-lg py-2 px-4">Tambah</button>
    </form>
</div>
@endif
</section>
@endsection