<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
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

Route::resource('/products', ProductController::class)->middleware('isLogin');
Route::post('/products/cari',[ProductController::class,'cari'])->middleware('isLogin');


Route::get('/',[SessionController::class,'index'])->middleware('isHasLogin');
Route::post('/sesi/login',[SessionController::class,'login']);
Route::get('/sesi/logout',[SessionController::class,'logout'])->middleware('isLogin');
