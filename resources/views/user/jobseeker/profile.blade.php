@extends('layouts.main')
@section('main')

@if(Auth::user()->jobSeeker === null)
    <p>Anda Belum mengisi Profile, Silahkan Lengkap Profile</p>
    <a href="{{ url ('/profile-jobseeker/create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Lengkapi Profile</a>
@else
<input type="text" value="{{ auth()->user()->name }}" readonly>
<input type="text" value="{{ auth()->user()->email }}" readonly>
<input type="text" value="{{ auth()->user()->jobSeeker->phone_number }}" readonly>
<input type="text" value="{{ auth()->user()->jobSeeker->address }}" readonly>
@endif

@endsection