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

use Illuminate\Http\Request;

Route::get('/', function () {
    if (session('user')) {
        return view('welcome',['user' => session('user')]);
    } else {
        return view('manager.login-form',['message' => 'Please log in']);
    }
});

Route::get('/create-product-form', function () {
    return view('product.product-create-form');
});
Route::post('/create-product','CreateProduct');
Route::get('/list-products','ListProducts');
Route::post('/login','Login');
Route::get('/logout','Logout');

Route::get('/login-form', function () {
    return view('manager.login-form',['message' => false]);
});

Route::get('/registration', function () {
    return view('manager.registration-form');
});

Route::post('/create-manager','CreateManager');

Route::get('/add-batch-form', function(Request $request) {
    return view('product.add-batch-form', array(
        'product_id' => $request->query('product_id'),
    ));
});
Route::post('/add-batch', 'AddBatch');

Route::get('/deduct-inventory-form',function(){
   return view('product.deduct-inventory-form');
});

Route::post('/deduct-inventory','DeductInventory');

Route::get('/expiring-inventory', 'ListExpiringBatches');

Route::get('/create-offer-form', function(Request $request){
   return view('offer.create-offer-form', array(
       'batch_id' => $request->query('batch_id')
   ));
});

Route::post('/create-offer','CreateOffer');
