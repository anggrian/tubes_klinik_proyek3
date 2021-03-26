<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
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

// Route::get('/login', [AuthController::class, 'getLogin'])->middleware('guest')->name('login');
// Route::post('/login', [AuthController::class, 'postLogin'])->middleware('guest');
// Route::get('/register', [AuthController::class, 'getRegister'])->middleware('guest')->name('register');
// Route::post('/register', [AuthController::class, 'postRegister'])->middleware('guest');
// Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
