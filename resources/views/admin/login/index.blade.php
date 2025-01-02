<!-- KELOMPOK_1_KELAS_A -->
@extends('admin.layouts.auth')
@section('form')
<form class="mx-auto max-w-xs">
    <input
        class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
        type="email" placeholder="Email" />
    <input
        class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
        type="password" placeholder="Password" />
    <button
        class="mt-5 tracking-wide font-semibold bg-green-400 text-white w-full py-4 rounded-lg hover:bg-green-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
        Masuk
    </button>
    <a href="/register"
        class="mt-2 tracking-wide font-semibold text-green-300 hover:text-white border border-green-300 hover:bg-green-400 focus:ring-green-300 w-full py-4 rounded-lg transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
        Daftar
    </a>
    <p class="mt-6 text-xs text-gray-600 text-center">
        Dibuat oleh Kelompok 1 kelas A
        <br />
        <span>Dengan sepenuh ❤️</span>
    </p>
</form>
@endsection`