<?php

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