<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalanceTransfer extends Model
{
    use HasFactory;

    public $table = 'balance_transfers';

    protected $fillable = [
        'title',
        'descrition',
        'image'
    ];
}
