<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivacyPolicy extends Model
{
    use HasFactory;

    public $table = 'privacy_policies';

    protected $fillable = [
        'title',
        'descrition',
        'image'
    ];
}
