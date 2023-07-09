<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StorageController;
use App\Http\Middleware\AuthMiddleware;
use App\Models\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::prefix('auth')->middleware('auth')->group(function(){
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');

    // STORAGE - Group Menu
    // Route::get('/storage',[StorageController::class,'index'])->name('storages');
    // Route::get('/storage/LoadDataStorage',[StorageController::class,'LoadDataStorage'])->name('LoadDataStorage');
    // Route::get('/storage/input',[StorageController::class,'ViewInsert'])->name('FormInputStorage');
    // Route::post('/storage/input',[StorageController::class,'Insert'])->name('insertStock');
    // Route::get('/storage/edit/{id}',[StorageController::class,'ViewEdit'])->name('FormEditStorage');
    // Route::post('/storage/edit/{id}',[StorageController::class,'Edit'])->name('editStock');
    // Route::get('/storage/delete/{id}',[StorageController::class,'Delete'])->name('deleteStock');

    // PRODUCT - Group Menu
    Route::get('/product',[ProductController::class,'index'])->name('product');
    Route::get('/product/loadDataProduct',[ProductController::class,'loadData'])->name('loadProduct');
    Route::get('/product/input',[ProductController::class,'input'])->name('product-input');
    Route::post('/product/input',[ProductController::class,'insert'])->name('product-insert');
    Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product-edit');
    Route::post('/product/edit/{id}',[ProductController::class,'update'])->name('product-update');
    Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product-delete');
});