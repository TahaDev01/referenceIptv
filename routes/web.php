<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\PaypalController;
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
    return view('index');
});

Route::post('/checkoutPaypal',[PaypalController::class , 'makePayment'])->name('checkoutPaypal');
Route::post('/checkoutVisa',[checkoutController::class , 'checkoutVisa'])->name('checkoutVisa'); 

Route::match(['get','post'],'/checkoutView',[checkoutController::class , 'checkoutView'])->name('checkoutView');

Route::get('success',function(){
  return "success";
})->name('success'); 

Route::post('/api/checkout',[checkoutController::class , 'checkout'])->name('checkout');

Route::get('/stripe',function(){   
  return view('stripeCheckout');
});