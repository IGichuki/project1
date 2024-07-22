<?php

use App\Http\Controllers\EmployerDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobsController;


Route::get('/', function () {
    return view('landing');
});

// Route::get('/login', function () {
//     return view('auth.login');
// });

Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/forgot-password', [AuthController::class, 'forgot']);

Route::post('/login', [AuthController::class, 'loginProcess'])->name('login');
Route::post('/register', [AuthController::class, 'registerProcess'])->name('register');

Route::get('/dashboard', [JobsController::class, 'retrieve'])->name('dashboard');
Route::post('admin/dashboard', [JobsController::class, 'post'])->name('admin-dashboard');

Route::get('/profile', function () {
    return view('client.profile');
});

Route::get('/attachments', function () {
    return view('client.attachments');
});

Route::get('/settings', function () {
    return view('client.settings');
});

Route::get('/admin/dashboard', [EmployerDashboardController::class, 'index'])->name('employer.dashboard');
