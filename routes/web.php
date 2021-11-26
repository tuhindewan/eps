<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Site\FAQController;
use App\Http\Controllers\Site\BillPaymentController;
use App\Http\Controllers\Site\BalanceTransferController;

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

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Contact up route

Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.sendmail');

// FAQ
Route::get('faq', [FAQController::class, 'index'])->name('faq');

// Balance Transfer
Route::get('balance-transfer', [BalanceTransferController::class, 'index'])->name('balance.transfer');

// Bill Payment
Route::get('bill-fee-payment', [BillPaymentController::class, 'index'])->name('bill.payment');
