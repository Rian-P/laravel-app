<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landing\AuthController;
use App\Http\Controllers\landing\CareerController;
use App\Http\Controllers\landing\LoginController;
use App\Http\Controllers\landing\dashboardController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EstehTimController;
use App\Http\Controllers\PortfolioTim;





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
Route::get('/lihat/hapus/{id_user}', [PostController::class, 'hapus'])->name('hapus.index');
Route::get('/lihat/edit/{id_user}', [PostController::class, 'ubahusers'])->name('ubahusers');
Route::post('/lihat/update', [PostController::class, 'updateusers'])->name('updateusers');


//Team
Route::get('/team', [EstehTimController::class, 'index'])->name('team');
Route::post('/insertTeam', [EstehTimController::class, 'store']);
Route::get('/viewTeam', [EstehTimController::class, 'show']);
Route::get('/hapus/{id}', [EstehTimController::class, 'destroy'])->name('destroy');
Route::get('/edit/{id}', [EstehTimController::class, 'edit'])->name('editteam');
Route::post('/updateteam/{id}', [EstehTimController::class, 'update'])->name('updateteam');




//Potofoliiio
Route::get('/portfolio', [PortfolioTim::class, 'index'])->name('portfolio');
Route::post('/insertPortfolio', [PortfolioTim::class, 'store']);
Route::get('/viewportfolio', [PortfolioTim::class, 'show']);
Route::get('/delete/{id}', [PortfolioTim::class, 'destroy'])->name('destroy');
Route::get('/editportfolio/{id}', [PortfolioTim::class, 'edit'])->name('editportfolio');
Route::post('/updateportfolio/{id}', [PortfolioTim::class, 'update'])->name('updateteam');

