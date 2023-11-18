<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\portofolioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', function () {
  return view('welcome');
})->middleware('auth');

// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
// Register
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');
// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/portofolio', [PortofolioController::class, 'index']);
Route::get('/post', [PostController::class,'index']);
Route::resource('/post', PostController::class)->names([
    'index' => 'posts.index',
    'create' => 'posts.create',
    'store' => 'posts.store',
    'show' => 'posts.show',
  ]);
Route::post('/send-message', [ContactController::class, 'SendEmail'])->name('contact_send');


