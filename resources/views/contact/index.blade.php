@extends('layouts.main')
@section('main')
<main class="z-20 mx-auto flex w-full flex-1 flex-col gap-y-8 p-4 py-16 sm:w-[1280px]">
    {{-- message --}}
    @if (Session::has('message'))
    <div id="alert-3" class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium">
            {{ Session::get('message') }}
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
    @endif

    <h1 class="text-center text-2xl font-bold mb-5">Contact Us</h1>
    <div class="flex flex-col sm:flex-row ml-5 sm:ml-11 justify-center items-center">
        <div class="flex flex-wrap p-5 w-full sm:max-w-sm">
            <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="px-5 py-4">
                    <div class="mb-1">
                        <label class="font-bold text-gray-800">Name</label>
                        <input type="text" name="name" id="name" placeholder="Your name" class="w-full  mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-300" />
                        @if ($errors->has('name'))
                        <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('name') }}</strong>
                    @endif
                    </div>
                    <div class="mb-1">
                        <label class="font-bold text-gray-800">Email</label>
                        <input type="email" name="email" id="email" placeholder="Your email" class="w-full mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-300" />
                        @if ($errors->has('email'))
                        <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('email') }}</strong>
                    @endif
                    </div>
                    <div class="mb-1">
                        <label class="font-bold text-gray-800">Message</label>
                        <textarea rows="5" name="message" id="message" placeholder="Your message" class="w-full mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-300"></textarea>
                        @if ($errors->has('message'))
                        <strong class="text-red-600 lowercase">&nbsp;* {{ $errors->first('message') }}</strong>
                    @endif
                    </div>
                    <div class="mb-5">
                        <button class="w-full px-4 py-2 font-bold text-white bg-accent1 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline">Submit</button>
                    </div>
                </div>
            </div>
            </form>
        </div>

        <div class="flex flex-wrap p-5 w-full sm:max-w-xl">
            <img class="inset-0 h-1/10 w-1/7" src="{{ asset('images/register-hero-1.svg') }}" alt="Pattern" />
        </div>
    </div>
</main>
@endsection
