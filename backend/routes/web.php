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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create-product-form', function () {
    return view('product.product-create-form');
});
Route::post('/create-product','CreateProduct');
Route::get('/list-products','ListProducts');
Route::post('/login','Login');

Route::get('/login-form', function () {
    return view('manager.login-form');
});

Route::get('/registration', function () {
    return view('manager.registration-form');
});

Route::get('/create-manager','CreateManager');
