<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QualityCreativity extends Model
{
    use HasFactory;

    protected $fillable = [
        'ar_title',
        'en_title',
        'ar_description',
        'en_description',
    ];
}