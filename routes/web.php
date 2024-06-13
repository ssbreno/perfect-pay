<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;

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
    return view('dashboard');
});

Route::get('/payment-success', function () {
    return view('payment-success');
});

Route::get('/payment-error', function () {
    return view('payment-error');
});

Route::post('/api/customers', [CustomerController::class, 'createCustomer']);
