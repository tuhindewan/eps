<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IOSApp extends Model
{
    use HasFactory;

    public $table = 'i_o_s_apps';

    protected $fillable = [
        'title',
        'descrition',
        'image'
    ];
}
