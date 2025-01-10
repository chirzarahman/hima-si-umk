<!-- MOHAMMAD FAJAR SIRULLAH (202253086) -->
@extends('layouts.sidebar')
@section('content')
<h1 class="text-3xl font-semibold mb-6 text-center">Detail Event</h1>

<div class="mx-auto w-full max-w-sm">
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg bg-cover" src="/storage/{{ $event->poster }}" alt="" />
        </a>
        <div class="p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $event->judul }}</h5>
            <span class="text-sm font-semibold text-gray-500">{{ $event->mulai }} - {{ $event->selesai }}</span>
            <div>
                <span class="font-semibold">Lokasi : </span>
                <span class="text-sm text-gray-500">{{ $event->lokasi }}</span>
            </div>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $event->deskripsi }}</p>
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