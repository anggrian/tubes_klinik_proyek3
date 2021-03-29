<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GaleriController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index_f', [FrontendController::class, 'index'])->name('index');
Route::get('/about', [FrontendController::class, 'about'])->name('about');

Route::get('galeri_f', [FrontendController::class, 'galeri_f'])->name('galeri_f');
Route::get('galeri', [GaleriController::class, 'index'])->name('galeri');
Route::post('galeri', [GaleriController::class, 'store'])->name('galeri.save');
Route::delete('galeri/{id}', [GaleriController::class, 'destroy'])->name('galeri.delete');
Route::get('galeri/edit{id}', [GaleriController::class, 'edit'])->name('galeri.edit');
Route::put('galeri/update{id}', [GaleriController::class, 'update'])->name('galeri.update');



// Route::get('/login', [AuthController::class, 'getLogin'])->middleware('guest')->name('login');
// Route::post('/login', [AuthController::class, 'postLogin'])->middleware('guest');
// Route::get('/register', [AuthController::class, 'getRegister'])->middleware('guest')->name('register');
// Route::post('/register', [AuthController::class, 'postRegister'])->middleware('guest');
// Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
