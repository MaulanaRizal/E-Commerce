<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
});


Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'registerPost'])->name('register');

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'loginPost'])->name('login');

Route::prefix('admin')->middleware([AuthMiddleware::class])->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('dashboard');
});