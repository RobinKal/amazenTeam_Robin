<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use const http\Client\Curl\PROXY_HTTP;

class Categorie extends Model
{
    protected $visible = ['name'];

public function product(){
    return $this->hasMany(Product::class);
}
}

