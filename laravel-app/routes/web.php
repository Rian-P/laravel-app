<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\landing\BlogController;
use App\http\Controllers\landing\TeamController;
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
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/team', [TeamController::class, 'index'])->name('team.index');