<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('beranda', ["title" => "Himapro SI UMK",]);
});

Route::get('/login', function () {
    return view('admin.login.index', ["title" => "Himapro SI UMK",]);
});

Route::get('/register', function () {
    return view('admin.register.index', ["title" => "Himapro SI UMK",]);
});

Route::get('/dashboard', function () {
    return view('admin.dashboard.index', ["title" => "Himapro SI UMK",]);
});

// Route::get('/list-anggota', function () {
//     return view('admin.users.index', ["title" => "Himapro SI UMK",]);
// });
Route::get('/data-anggota', [UsersController::class, 'index']);

Route::get('/data-event', function () {
    return view('admin.events.index', ["title" => "Himapro SI UMK",]);
});