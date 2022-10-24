<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landing\AuthController;
use App\Http\Controllers\landing\ContactController;
use App\Http\Controllers\landing\HomeController;
use App\Http\Controllers\landing\ServiceController;
use App\Http\Controllers\landing\BlogController;
use App\Http\Controllers\landing\CarrierController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/carier', [CarrierController::class, 'index'])->name('carier.index');