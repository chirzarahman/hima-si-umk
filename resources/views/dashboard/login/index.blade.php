<!-- MOHAMMAD FAJAR SIRULLAH (202253086) -->
@extends('layouts.auth')
@section('form')
@if(session()->has('loginError'))
<div id="alert-2"
    class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-200 dark:bg-gray-800 dark:text-red-400"
    role="alert">
    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
        viewBox="0 0 20 20">
        <path
            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <span class="sr-only">Info</span>
    <div class="ms-3 text-sm font-medium">
        {{ session('loginError') }}
    </div>
    <button type="button"
        class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
        data-dismiss-target="#alert-2" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
    </button>
</div>
@endif
<form class="mx-auto max-w-xs" action="{{ route('login') }}" method="POST">
    @csrf
    <input
        class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
        type="email" placeholder="Email" name="email" />
    @foreach ($errors->get('email') as $error)
    <span class="text-red-500">{{ $error }}</span>
    @endforeach
    <input
        class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
        type="password" placeholder="Password" name="password" />
    @foreach ($errors->get('password') as $error)
    <span class="text-red-500">{{ $error }}</span>
    @endforeach
    <button type="submit" value="login"
        class="mt-5 tracking-wide font-semibold bg-sky-400 text-white w-full py-4 rounded-lg hover:bg-sky-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
        Masuk
    </button>
    <!-- <a href="/register"
        class="mt-2 tracking-wide font-semibold text-sky-300 hover:text-white border border-sky-300 hover:bg-sky-400 focus:ring-sky-300 w-full py-4 rounded-lg transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
        Daftar
    </a> -->
    <p class="mt-6 text-xs text-gray-600 text-center">
        Dibuat oleh Kelompok 1 kelas A
        <br />
        <span>Dengan sepenuh ❤️</span>
    </p>
</form>
@endsection`