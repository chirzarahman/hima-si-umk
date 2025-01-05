<!-- KELOMPOK_1_KELAS_A -->
@extends('layouts.sidebar')
@section('content')
<h1 class="text-3xl font-semibold mb-6 text-center">Detail Anggota</h1>

<div
    class="w-full max-w-lg p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 mx-auto dark:bg-gray-800 dark:border-gray-700">
    <div>
        <ul>
            <li>
                <img src="/storage/{{ $department->image }}" width="100px">
            </li>
            <li>{{ $department->nama }}</li>
            <li>{{ $department->detail }}</li>
        </ul>
    </div>
</div>

@endsection