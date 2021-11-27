<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnhancingBanking extends Model
{
    use HasFactory;

    public $table = 'enhancing_bankings';

    protected $fillable = [
        'title',
        'descrition',
        'image'
    ];
}
