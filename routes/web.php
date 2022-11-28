<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landing\AuthController;
use App\Http\Controllers\landing\ContactController;
use App\Http\Controllers\landing\HomeController;
use App\Http\Controllers\landing\ServiceController;
use App\Http\Controllers\landing\BlogController;
use App\Http\Controllers\landing\CarrierController;
use App\Http\Controllers\landing\BlogdetailController;
use App\Http\Controllers\landing\UpdateBlogController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::resource('post', PostController::class);
Route::get('/carier', [CarrierController::class, 'index'])->name('carier.index');
Route::get('/blogdetail', [BlogdetailController::class, 'index'])->name('blogdetail.index');
Route::get('/updateblog', [UpdateBlogController::class, 'index'])->name('updateblog.index');
Route::get('/tambahblog', [UpdateBlogController::class, 'tambah'])->name('tambahblog.index');
Route::post('/tambahblog', [UpdateBlogController::class, 'store'])->name('tambahblog.index');
Route::get('/updateblog/edit/{id}', [UpdateBlogController::class, 'edit'])->name('editblog.index');
Route::post('/updateblog/update', [UpdateBlogController::class, 'update'])->name('update.index');
Route::get('/updateblog/hapus/{id}', [UpdateBlogController::class, 'hapus'])->name('hapus.index');
