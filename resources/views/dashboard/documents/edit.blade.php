<!-- KELOMPOK_1_KELAS_A -->
@extends('layouts.sidebar')
@section('content')
<h1 class="text-3xl font-semibold mb-6 text-center">Edit Dokumen</h1>

<div
    class="w-full max-w-lg p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 mx-auto dark:bg-gray-800 dark:border-gray-700">
    <form class="space-y-6" action="{{ route('documents.update', $document->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
            <input type="text" name="judul" id="judul"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                placeholder="Judul" value="{{ $document->judul }}" required />
            <div class="my-2 text-sm text-red-600 dark:text-red-500">
                @foreach ($errors->get('judul') as $error)
                {{ $error }}
                @endforeach
            </div>
        </div>
        <div>
            <label for="deskripsi"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                placeholder="Deskripsi">{{ $document->deskripsi }}</textarea>
            <div class="my-2 text-sm text-red-600 dark:text-red-500">
                @foreach ($errors->get('deskripsi') as $error)
                {{ $error }}
                @endforeach
            </div>
        </div>
        <div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Icon
                    Departemen</label>
            </div>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="file_input_help" id="file_input" type="file" name="file">
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">pdf, doc, docx or txt.</p>
            <div class="my-2 text-sm text-red-600 dark:text-red-500">
                @foreach ($errors->get('file') as $error)
                {{ $error }}
                @endforeach
            </div>
        </div>

        <button type="submit"
            class="w-full text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center uppercase dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">Simpan</button>
    </form>
</div>

@endsection