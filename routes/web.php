<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\productController;
use App\Http\Controllers\frontController;
use App\Http\Controllers\ratingController;
use App\Http\Controllers\reviewController;

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
//     return view('index');
// });
Route::get('/',[frontController::class,'index']);
Route::get('/product_view/{id}',[frontController::class,'product_view']);

Route::get('/login', function () {
    return view('login');
});
Route::POST('/check',[LoginController::class,'login']);


//Product
Route::get('/product',[productController::class,'index']);
Route::POST('/add_product',[productController::class,'store']);
Route::get('/edit_product/{id}',[productController::class,'edit']);
Route::PUT('/update_product/{id}',[productController::class,'update']);
Route::get('/delete_product/{id}',[productController::class,'delete']);
Route::get('/add',[productController::class,'addview']);


Route::POST('/add_rating',[ratingController::class,'add']);
Route::get('/add_review/{id}',[reviewController::class,'index']);
Route::POST('/add_review',[reviewController::class,'add']);

