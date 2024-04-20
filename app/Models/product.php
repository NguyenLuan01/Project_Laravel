<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'author',
        'slug',
        'img',
        'price',
        'ttdb1',
        'ttdb2',
        'mausac',
        'detail',
        'stt',
        'status',
    ];

}
