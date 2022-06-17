<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'discount',
        'weight',
        'url_image',
        'quantity',
        'available',
        'categories_id',
    ];
    public $timestamps = false;
    use HasFactory;
}
