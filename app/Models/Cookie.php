<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cookie extends Model
{
    use HasFactory;

    public $table = 'cookies';

    protected $fillable = [
        'title',
        'descrition',
        'image'
    ];
}