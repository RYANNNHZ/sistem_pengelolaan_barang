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

Route::resource('/products',ProductController::class)->middleware('isLogin');
Route::controller(ProductController::class)->group(function(){
    Route::post('/products/cari','cari')->middleware('isLogin');
    Route::get('/statistik','statistik')->middleware('isLogin');
    Route::get('/sampah','sampah')->middleware('isLogin');
    Route::get('/sampah/force/{id}','force')->middleware('isLogin');
    Route::get('sampah/restore/{id}','restore')->middleware('isLogin');
});



Route::get('/',[SessionController::class,'index'])->middleware('isHasLogin');
Route::post('/sesi/login',[SessionController::class,'login']);
Route::get('/sesi/logout',[SessionController::class,'logout'])->middleware('isLogin');
