<?php

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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

// Route utama
Route::get('/', function () {
    return view('welcome');
});

// Mengaktifkan rute untuk otentikasi (login, register, dll)
Auth::routes();

// Rute menuju home setelah login
Route::get('/home', [HomeController::class, 'index'])->name('home');
