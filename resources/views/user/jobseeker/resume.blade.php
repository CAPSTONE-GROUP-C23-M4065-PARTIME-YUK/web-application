@extends('layouts.main')
@section('main')
<form action="/edit" method="POST" enctype="multipart/form-data">
@csrf
@method('put')
<input type="text" value="{{ auth()->user()->jobSeeker->phone_number }}" name="phone_number" hidden>
<input type="text" value="{{ auth()->user()->jobSeeker->address }}" name="address" hidden>
<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
<input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file" name="resume" required>
<p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PDF</p>
<button type="submit" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Tambah</button>
</form>


@endsection