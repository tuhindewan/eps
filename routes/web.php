<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Site\FAQController;
use App\Http\Controllers\Site\BillPaymentController;
use App\Http\Controllers\Site\MobileTopUpController;
use App\Http\Controllers\Site\BalanceEnquiryController;
use App\Http\Controllers\Site\BalanceTransferController;
use App\Http\Controllers\Site\MerchantPaymentController;
use App\Http\Controllers\Site\CorporateServiceController;
use App\Http\Controllers\Site\EnhancingBankingServiceController;
use App\Http\Controllers\Admin\BalanceTransferController as AdminBalanceTransferController;
use App\Http\Controllers\Admin\BillPaymentController as AdminBillPaymentController;
use App\Http\Controllers\Admin\MerchantPaymentController as AdminMerchantPaymentController;

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


// Admin routes
Route::group(['prefix' => 'admin'], function () {
    Auth::routes();

    //Balance transfer
    Route::get('/balanc-transfer/{balance}/edit', [AdminBalanceTransferController::class, 'edit'])->name('balance.edit');
    Route::put('/balanc-transfer/{balance}', [AdminBalanceTransferController::class, 'update'])->name('balance.update');

    //Bill Payment
    Route::get('/bill-payment/{bill}/edit', [AdminBillPaymentController::class, 'edit'])->name('bill.edit');
    Route::put('/bill-payment/{bill}', [AdminBillPaymentController::class, 'update'])->name('bill.update');

    //Merchant Payment
    Route::get('/merchant-payment/{merchant}/edit', [AdminMerchantPaymentController::class, 'edit'])->name('merchant.edit');
    Route::put('/merchant-payment/{merchant}', [AdminMerchantPaymentController::class, 'update'])->name('merchant.update');
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

// Merchant Payment
Route::get('merchant-payment', [MerchantPaymentController::class, 'index'])->name('merchant.payment');

// Balance Enquiry
Route::get('balance-enquiry', [BalanceEnquiryController::class, 'index'])->name('balance.enquiry');

// Mobile Top-up
Route::get('mobile-topup', [MobileTopUpController::class, 'index'])->name('mobile.topup');

// Corporate Services
Route::get('corporate-services', [CorporateServiceController::class, 'index'])->name('corporate.service');

// Enhancing Banking Services
Route::get('enhancing-banking-services', [EnhancingBankingServiceController::class, 'index'])->name('enhancing.banking.service');
