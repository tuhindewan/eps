<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AndroidApp extends Model
{
    use HasFactory;

    public $table = 'android_apps';

    protected $fillable = [
        'title',
        'descrition',
        'image'
    ];
}
