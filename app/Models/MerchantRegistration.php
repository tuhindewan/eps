<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerchantRegistration extends Model
{
    use HasFactory;

    public $table = 'merchant_registrations';

    protected $fillable = [
        'title',
        'descrition',
        'image'
    ];
}
