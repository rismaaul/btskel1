<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route for displaying the login form
// route::get('auth/login', [AuthController::class, 'index']);

// Route::get('auth/login', [AuthController::class, 'index'])->name('login');

// Route for handling the login submission
//Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route for handling user logout
//Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
use App\Http\Controllers\DashboardController;

// Route for displaying the dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// login
Route::get('auth/login', [AuthController::class, 'index'])->name('login');



