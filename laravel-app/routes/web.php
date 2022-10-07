<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\landing\PortofolioController;
use App\http\Controllers\landing\AboutController;

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

Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');