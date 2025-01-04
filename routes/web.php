<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentsController;
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

// Route::get('/dashboard', function () {
//     return view('admin.dashboard.index', ["title" => "Himapro SI UMK",]);
// });
Route::resource('dashboard', DashboardController::class);

// Route::get('/list-anggota', function () {
//     return view('admin.users.index', ["title" => "Himapro SI UMK",]);
// });

Route::get('/data-event', function () {
    return view('admin.dashboard.events.index', ["title" => "Himapro SI UMK",]);
});

Route::resource('users', UsersController::class);
Route::get('/data-anggota', [UsersController::class, 'index']);

// Route::get('/tambah-anggota', function () {
//     return view('admin.dashboard.users.create', ["title" => "Himapro SI UMK",]);
// });
// Route::get('/edit-anggota/{id}', function () {
//     return view('admin.dashboard.users.edit', ["title" => "Himapro SI UMK",]);
// });

Route::resource('departments', DepartmentsController::class);
// Route::get('/data-departemen', [DepartmentsController::class, 'index']);