<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorporateService extends Model
{
    use HasFactory;

    public $table = 'corporate_services';

    protected $fillable = [
        'title',
        'descrition',
        'image'
    ];
}
