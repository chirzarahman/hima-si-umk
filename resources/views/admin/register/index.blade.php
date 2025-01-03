<!-- KELOMPOK_1_KELAS_A -->
@extends('admin.layouts.auth')
@section('form')
<form class="mx-auto max-w-xs">
    <input
        class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
        type="text" placeholder="Nama" />
    <input
        class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
        type="email" placeholder="Email" />
    <input
        class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
        type="password" placeholder="Password" />
    <button
        class="mt-5 tracking-wide font-semibold bg-sky-400 text-white w-full py-4 rounded-lg hover:bg-sky-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
        <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
            <circle cx="8.5" cy="7" r="4" />
            <path d="M20 8v6M23 11h-6" />
        </svg>
        <span class="ml-3">
            Daftar
        </span>
    </button>
    <a href="/login"
        class="mt-2 tracking-wide font-semibold text-sky-300 hover:text-white border border-sky-300 hover:bg-sky-400 focus:ring-sky-300 w-full py-4 rounded-lg transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
        Masuk
    </a>
    <p class="mt-6 text-xs text-gray-600 text-center">
        Dibuat oleh Kelompok 1 kelas A
        <br />
        <span>Dengan sepenuh ❤️</span>
    </p>
</form>
@endsection