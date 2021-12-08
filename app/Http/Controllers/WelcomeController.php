<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Advantage;
use App\Models\Feature;
use App\Models\BillPayment;
use Illuminate\Http\Request;
use App\Models\BalanceTransfer;
use App\Models\MerchantPayment;
use App\Models\CorporateService;

class WelcomeController extends Controller
{
    public function index()
    {
        $about = AboutUs::first();
        $balanacTransfer = BalanceTransfer::first();
        $bill = BillPayment::first();
        $merchant = MerchantPayment::first();
        $corporate = CorporateService::first();
        $feature = Feature::first();
        $advantages = Advantage::all();
        return view('welcome', compact('about', 'balanacTransfer', 'bill', 'merchant', 'corporate', 'feature', 'advantages'));
    }
}
