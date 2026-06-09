<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = '_add_cart_view';
    
    protected $fillable = [
        'image',
        'productName',
        'price',
        'quantity',
        'Subtotal',
    ];
}
