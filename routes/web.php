<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

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
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/initiate-payment', 'PaymentController@initiatePayment');
// Route::post('/phonepe-callback', 'PaymentController@handleCallback');
// Route::get('/pay', 'PaymentController@initiatePayment');
//Route::get('/pay', PaymentControlle::class,'index');

Route::get('/',[PaymentController::class,'index']);
Route::get('phonepe',[PaymentController::class,'phonePe']);
Route::any('phonepe-response',[PaymentController::class,'response'])->name('response');
// Route::any('phonepe-response',[PaymentController::class,'response'])->name('response');
Route::get('refund/{id}',[PaymentController::class,'refundProcess']);


