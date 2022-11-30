<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landing\AuthController;
use App\Http\Controllers\landing\CareerController;
use App\Http\Controllers\landing\LoginController;
use App\Http\Controllers\landing\dashboardController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/home', [AuthController::class, 'home'])->name('home');
Route::get('/career', [CareerController::class, 'cereer'])->name('cerrer');
// Route::get('/landing', [LoginController::class, 'index'])->name('login');
// Route::get('/dashboard', [dashboardController::class, 'dashboard'])->name('dashboard');
// Route::get('/login', [SessionController::class, 'index'])->name('login1');
// Route::post('/login', [SessionController::class, 'login1'])->name('login1');

// Route::post('/landing/masuk', [LoginController::class, 'masuk'])->name('masuk');


//login//
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//Register//
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

//data//
//route resource
Route::get('/lihat', [PostController::class, 'index'])->name('users');
