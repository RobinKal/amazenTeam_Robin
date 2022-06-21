<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function orders(){
        return $this->belongsToMany(Order_product::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    protected $fillable = [
        'name',
        'description',
        'price',
        'discount',
        'weight',
        'url_image',
        'quantity',
        'available',
        'categorie_id',
    ];
    public $timestamps = false;
    use HasFactory;
}
