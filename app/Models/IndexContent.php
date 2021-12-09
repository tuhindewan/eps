<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndexContent extends Model
{
    use HasFactory;

    public $table = 'index_contents';

    protected $fillable = [
        'content',
        'image'
    ];
}
