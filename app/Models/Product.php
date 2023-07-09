<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'price',
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
