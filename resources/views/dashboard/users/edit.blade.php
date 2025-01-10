<!-- MOHAMMAD KAHIRUL ANWAR (202253078) -->
@extends('layouts.sidebar')
@section('content')
<h1 class="text-3xl font-semibold mb-6 text-center">Edit Anggota</h1>

<div
    class="w-full max-w-lg p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 mx-auto dark:bg-gray-800 dark:border-gray-700">
    <form class="space-y-6" action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-2 gap-x-2">
            <div>
                <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                <input type="number" name="nim" id="nim"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="NIM" value="{{ $user->nim }}" required />
                <div class="my-2 text-sm text-red-600 dark:text-red-500">
                    @foreach ($errors->get('nim') as $error)
                    {{ $error }}
                    @endforeach
                </div>
            </div>
            <div>
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                <input type="text" name="nama" id="nama"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="Nama Lengkap" value="{{ $user->nama }}" required />
                <div class="my-2 text-sm text-red-600 dark:text-red-500">
                    @foreach ($errors->get('nama') as $error)
                    {{ $error }}
                    @endforeach
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-x-2">
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="name@company.com" value="{{ $user->email }}" required />
                <div class="my-2 text-sm text-red-600 dark:text-red-500">
                    @foreach ($errors->get('email') as $error)
                    {{ $error }}
                    @endforeach
                </div>
            </div>
            <div>
                <label for="departemen_id"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Departemen</label>
                <select id="departemen_id" name="departemen_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500">
                    <option selected disabled hidden value="">Pilih Departemen</option>
                    @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->nama }}</option>
                    @endforeach
                </select>
                <div class="my-2 text-sm text-red-600 dark:text-red-500">
                    @foreach ($errors->get('departemen_id') as $error)
                    {{ $error }}
                    @endforeach
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-x-2">
            <div>
                <label for="jabatan"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
                <select id="jabatan" name="jabatan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                    placeholder="Pilih Jabatan">
                    <option selected disabled hidden value="">Pilih Jabatan</option>
                    <option value="Dosen Pebimbing">Dosen Pebimbing</option>
                    <option value="Ketua Departemen">Ketua Departemen</option>
                    <option value="Anggota">Anggota</option>
                </select>
                <div class="my-2 text-sm text-red-600 dark:text-red-500">
                    @foreach ($errors->get('jabatan') as $error)
                    {{ $error }}
                    @endforeach
                </div>
            </div>
            <div>
                <label for="angkatan"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Angkatan</label>
                <select id="angkatan" name="angkatan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                    placeholder="Pilih Angkatan">
                    <option selected disabled hidden value="">Pilih Angkatan</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                </select>
                <div class="my-2 text-sm text-red-600 dark:text-red-500">
                    @foreach ($errors->get('angkatan') as $error)
                    {{ $error }}
                    @endforeach
                </div>
            </div>
        </div>
        <div>
            <label for="jenis_kelamin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                Kelamin</label>

            <div class="flex">
                <div class="flex items-center me-4">
                    <input id="inline-radio" type="radio" value="laki-laki" name="jenis_kelamin"
                        class="w-4 h-4 text-sky-600 bg-gray-100 border-gray-300 focus:ring-sky-500 dark:focus:ring-sky-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki -
                        laki</label>
                </div>
                <div class="flex items-center me-4">
                    <input id="inline-2-radio" type="radio" value="perempuan" name="jenis_kelamin"
                        class="w-4 h-4 text-sky-600 bg-gray-100 border-gray-300 focus:ring-sky-500 dark:focus:ring-sky-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-2-radio"
                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                </div>
            </div>
            <div class="my-2 text-sm text-red-600 dark:text-red-500">
                @foreach ($errors->get('jenis_kelamin') as $error)
                {{ $error }}
                @endforeach
            </div>
        </div>
        <!-- <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Passowrd</label>
            <input type="password" name="password" id="password" placeholder=""
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required />
        </div> -->
        <div>
            <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
            <textarea id="alamat" rows="4" name="alamat"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                placeholder="Alamat Tempat Tinggal">{{ $user->alamat }}</textarea>
            <div class="my-2 text-sm text-red-600 dark:text-red-500">
                @foreach ($errors->get('alamat') as $error)
                {{ $error }}
                @endforeach
            </div>
        </div>
        <div>
            <div class="flex items-center">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Photo
                    Profile</label>
                <img src="/storage/{{ $user->foto }}" width="100px">
            </div>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="file_input_help" id="file_input" type="file" name="foto">
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG or JPEG.</p>
            <div class="my-2 text-sm text-red-600 dark:text-red-500">
                @foreach ($errors->get('foto') as $error)
                {{ $error }}
                @endforeach
            </div>
        </div>

        <button type="submit"
            class="w-full text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center uppercase dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">Simpan</button>
    </form>
</div>

@endsection