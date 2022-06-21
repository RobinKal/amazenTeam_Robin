<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function product(){
        return $this->belongsToMany(Product::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
