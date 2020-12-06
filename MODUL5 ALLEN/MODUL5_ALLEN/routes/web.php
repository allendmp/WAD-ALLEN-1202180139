<?php

use Illuminate\Support\Facades;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

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

Route::get('/ss', function () {
    return view('layouts.app');
});

Route::get('/', function () {
    return view('home');
});

//view biasa 
Route::view('/product', 'product');
Route::view('/history', 'history');
Route::view('/order', 'order');
Route::view('/input_product', 'input_product');
Route::view('/input_order', 'input_order');



//buat produxt
Route::get('/product', [ProductController::class, 'index']);
Route::post('/makeProduct', [ProductController::class, 'create']);

//BUAT UPDATE
Route::get('/update/{id}', [ProductController::class, 'updateIndex']);
Route::patch('/update/{id}', [ProductController::class, 'update']);


//buat delete
Route::delete('/delete/{id}', [ProductController::class, 'delete']);

//order
Route::get('/order', [OrderController::class, 'indexOrder']);
Route::get('/input_order/{id}', [OrderController::class, 'view']);
Route::post('/makeOrder', [OrderController::class, 'create']);


//history
Route::post('/history', [OrderController::class, 'indexHistory']);