<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'quantity',
        'code_stock',
        'date_stock',
        'expired_date',
        'date_stock',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
