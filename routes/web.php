<?php

use App\Http\Controllers\Admin\BalanceInquiryController;
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
use App\Http\Controllers\Admin\CookiePolicyController as AdminCookiePolicyController;
use App\Http\Controllers\Admin\CorporateServiceController as AdminCorporateServiceController;
use App\Http\Controllers\Admin\EnhancingBankingServiceController as AdminEnhancingBankingServiceController;
use App\Http\Controllers\Admin\FAQController as AdminFAQController;
use App\Http\Controllers\Admin\MerchantPaymentController as AdminMerchantPaymentController;
use App\Http\Controllers\Admin\MerchantRegistrationController as AdminMerchantRegistrationController;
use App\Http\Controllers\Admin\MobileTopUpController as AdminMobileTopUpController;
use App\Http\Controllers\Admin\PrivacyPolicyController as AdminPrivacyPolicyController;
use App\Http\Controllers\Admin\ServiceDetailController as AdminServiceDetailController;
use App\Http\Controllers\Admin\TermController as AdminTermController;
use App\Http\Controllers\Admin\UserRegistrationController as AdminUserRegistrationController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\CookiePolicyController;
use App\Http\Controllers\Site\MerchantRegistrationController;
use App\Http\Controllers\Site\PrivacyPolicyController;
use App\Http\Controllers\Site\ServiceDetailController;
use App\Http\Controllers\Site\TermController;
use App\Http\Controllers\Site\UserRegistrationController;

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
    Route::get('/balance-transfer/{balance}/edit', [AdminBalanceTransferController::class, 'edit'])->name('balance.edit');
    Route::put('/balance-transfer/{balance}', [AdminBalanceTransferController::class, 'update'])->name('balance.update');

    //Bill Payment
    Route::get('/bill-payment/{bill}/edit', [AdminBillPaymentController::class, 'edit'])->name('bill.edit');
    Route::put('/bill-payment/{bill}', [AdminBillPaymentController::class, 'update'])->name('bill.update');

    //Merchant Payment
    Route::get('/merchant-payment/{merchant}/edit', [AdminMerchantPaymentController::class, 'edit'])->name('merchant.edit');
    Route::put('/merchant-payment/{merchant}', [AdminMerchantPaymentController::class, 'update'])->name('merchant.update');

    //Balance Enquiry
    Route::get('/balance-enquiry/{enquiry}/edit', [BalanceInquiryController::class, 'edit'])->name('enquiry.edit');
    Route::put('/balance-enquiry/{enquiry}', [BalanceInquiryController::class, 'update'])->name('enquiry.update');

    //Mobile Top-up
    Route::get('/mobile-topup/{mobile}/edit', [AdminMobileTopUpController::class, 'edit'])->name('mobile.edit');
    Route::put('/mobile-topup/{mobile}', [AdminMobileTopUpController::class, 'update'])->name('mobile.update');

    //Corporate Services
    Route::get('/corporate-servicess/{corporate}/edit', [AdminCorporateServiceController::class, 'edit'])->name('corporate.edit');
    Route::put('/corporate-servicess/{corporate}', [AdminCorporateServiceController::class, 'update'])->name('corporate.update');

    //Enhancing Banking Services
    Route::get('/enhancing-banking-services/{enhancing}/edit', [AdminEnhancingBankingServiceController::class, 'edit'])->name('enhancing.edit');
    Route::put('/enhancing-banking-services/{enhancing}', [AdminEnhancingBankingServiceController::class, 'update'])->name('enhancing.update');

    //Merchant Registration
    Route::get('/merchant-registration/{merreg}/edit', [AdminMerchantRegistrationController::class, 'edit'])->name('merreg.edit');
    Route::put('/merchant-registration/{merreg}', [AdminMerchantRegistrationController::class, 'update'])->name('merreg.update');

    //User Registration
    Route::get('/user-registration/{userreg}/edit', [AdminUserRegistrationController::class, 'edit'])->name('userreg.edit');
    Route::put('/user-registration/{userreg}', [AdminUserRegistrationController::class, 'update'])->name('userreg.update');

    //Service Details
    Route::get('/service-details/{service}/edit', [AdminServiceDetailController::class, 'edit'])->name('service.edit');
    Route::put('/service-details/{service}', [AdminServiceDetailController::class, 'update'])->name('service.update');

    //FAQ
    Route::prefix('faq')->group(function () {
        Route::get('/', [AdminFAQController::class, 'index'])->name('admin.faq.index');
        Route::get('/create', [AdminFAQController::class, 'create'])->name('admin.faq.create');
        Route::post('/store', [AdminFAQController::class, 'store'])->name('admin.faq.store');
        Route::get('/{faq}/edit', [AdminFAQController::class, 'edit'])->name('admin.faq.edit');
        Route::put('/{faq}/update', [AdminFAQController::class, 'update'])->name('admin.faq.update');
    });

    //Privacy Policy
    Route::get('/privacy-policy/{privacy}/edit', [AdminPrivacyPolicyController::class, 'edit'])->name('privacy.edit');
    Route::put('/privacy-policy/{privacy}', [AdminPrivacyPolicyController::class, 'update'])->name('privacy.update');

    //Terms and conditions
    Route::get('/terms-conditions/{term}/edit', [AdminTermController::class, 'edit'])->name('term.edit');
    Route::put('/terms-conditions/{term}', [AdminTermController::class, 'update'])->name('term.update');

    //Cookie Policy
    Route::get('/cookie-policy/{cookie}/edit', [AdminCookiePolicyController::class, 'edit'])->name('cookie.edit');
    Route::put('/cookie-policy/{cookie}', [AdminCookiePolicyController::class, 'update'])->name('cookie.update');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Contact up route

Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.sendmail');

// FAQ
Route::get('faqs', [FAQController::class, 'index'])->name('faq');

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

// Merchant Registration
Route::get('merchant-registration', [MerchantRegistrationController::class, 'index'])->name('merchant.registration.index');

// User Registration
Route::get('user-registration', [UserRegistrationController::class, 'index'])->name('user.registration.index');

// Service Details
Route::get('service-details', [ServiceDetailController::class, 'index'])->name('service.details.index');

// Privacy Policy
Route::get('privacy-policy', [PrivacyPolicyController::class, 'index'])->name('privacy.policy.index');

// Terms and conditions
Route::get('terms-conditions', [TermController::class, 'index'])->name('term.index');

// Cookie Policy
Route::get('cookie-policy', [CookiePolicyController::class, 'index'])->name('cookie.index');

// Blog
Route::get('blogs', [BlogController::class, 'index'])->name('blog.index');
