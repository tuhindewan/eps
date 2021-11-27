<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerchantPayment extends Model
{
    use HasFactory;

    public $table = 'merchant_payments';

    protected $fillable = [
        'title',
        'descrition',
        'image'
    ];
}
