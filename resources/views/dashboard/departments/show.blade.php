<!-- MOH ADI KURNIAWAN (202253057) -->
@extends('layouts.sidebar')
@section('content')
<h1 class="text-3xl font-semibold mb-6 text-center">Detail Departemen</h1>

<div class="mx-auto w-full max-w-sm">
    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow p-5">
        <div class="flex flex-col items-center">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg bg-cover" src="/storage/{{ $department->icon }}"
                alt="Bonnie image" />
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $department->nama }}</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $department->detail }}</span>
        </div>
    </div>
    <a href="{{ url()->previous() }}" class="text-blue-500 underline flex items-center mt-2">
        <svg class="w-5 h-5 me-2" fill="currentColor" id="Icons" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path class="cls-1"
                d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm6,12H8.414l2.293,2.293a1,1,0,1,1-1.414,1.414l-4-4a1,1,0,0,1,0-1.414l4-4a1,1,0,1,1,1.414,1.414L8.414,11H18a1,1,0,0,1,0,2Z" />
        </svg>
        Kembali
    </a>
</div>

@endsection