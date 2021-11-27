<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileTop extends Model
{
    use HasFactory;

    public $table = 'mobile_tops';

    protected $fillable = [
        'title',
        'descrition',
        'image'
    ];
}
