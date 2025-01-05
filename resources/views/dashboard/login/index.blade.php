<!-- KELOMPOK_1_KELAS_A -->
@extends('layouts.auth')
@section('form')
<form class="mx-auto max-w-xs" action="{{ route('login') }}" method="POST">
    @csrf
    <input
        class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
        type="email" placeholder="Email" name="email" />
    <input
        class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
        type="password" placeholder="Password" name="password" />
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