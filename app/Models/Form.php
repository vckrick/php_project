<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'vocation', 'about',
        'adress',
    ];

    protected $casts = [
        'user_id' => 'integer',
    ];
}
