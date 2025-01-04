<!-- KELOMPOK_1_KELAS_A -->
@extends('admin.layouts.main')
@section('content')
<div class="grid grid-cols-3 gap-x-4">
    <div
        class="max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 flex justify-between items-center dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <div>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-red-600 dark:text-white">Program Kerja</h5>
        </div>
        <dt
            class="w-20 h-20 rounded-full bg-red-100 dark:bg-gray-500 text-red-600 dark:text-red-300 text-4xl font-medium flex items-center justify-center mb-1">
            12</dt>
    </div>

    <div
        class="max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 flex justify-between items-center dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <div>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-amber-600 dark:text-white">Departemen</h5>
        </div>
        <dt
            class="w-20 h-20 rounded-full bg-amber-100 dark:bg-gray-500 text-amber-600 dark:text-amber-300 text-4xl font-medium flex items-center justify-center mb-1">
            {{ $departments }}

        </dt>
    </div>
    <div
        class="max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 flex justify-between items-center dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <div>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-emerald-600 dark:text-white">Anggota</h5>
        </div>
        <dt
            class="w-20 h-20 rounded-full bg-emerald-100 dark:bg-gray-500 text-emerald-600 dark:text-emerald-300 text-4xl font-medium flex items-center justify-center mb-1">
            {{ $users }}
        </dt>
    </div>
</div>


<div
    class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 mt-8 dark:bg-gray-800 dark:border-gray-700">
    <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Work fast from anywhere</h5>
    <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Stay up to date and move work forward with
        Flowbite on iOS & Android. Download the app today.</p>
</div>


@endsection