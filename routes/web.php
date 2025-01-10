<?php
// CHIRZA RAHMAN (202253048)
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::resource('dashboard', DashboardController::class)->middleware('auth');
Route::resource('events', EventsController::class)->middleware('auth');
Route::resource('documents', DocumentsController::class)->middleware('auth');
Route::resource('users', UsersController::class)->middleware('auth');
Route::resource('departments', DepartmentsController::class)->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/', [GuestController::class, 'index']);
Route::get('/detail/{kntl}/show', [GuestController::class, 'show']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);