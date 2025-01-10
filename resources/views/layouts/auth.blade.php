<!-- MOHAMMAD FAJAR SIRULLAH (202253086) -->
@extends('layouts.main')
@section('container')
<div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
    <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
        <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12 flex flex-col items-center justify-center min-h-full">
            <div>
                <img src="{{asset('images/logo.png')}}" class="w-[130px] mx-auto" />
                <h2 class="text-center text-3xl font-semibold">HIMAPRO SI UMK</h2>
            </div>
            <div class="mt-5 flex flex-col items-center">
                @yield('form')
            </div>
        </div>
        <div class="flex-1 bg-sky-100 text-center hidden lg:flex">
            <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"
                style="background-image: url('/images/image1.svg');">
            </div>
        </div>
    </div>
</div>
@endsection