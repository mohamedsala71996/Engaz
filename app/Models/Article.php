<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'ar_description',
        'en_description',
        'en_title',
        'ar_title',
        'admin_id',
        'image',
    ];
}