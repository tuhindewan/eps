<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteMap extends Model
{
    use HasFactory;

    public $table = 'site_maps';

    protected $fillable = [
        'title',
        'descrition',
        'image'
    ];
}
