<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function listOfProducts()
    {
        $products = DB::select('select * from products');
        return view('product-list', ['products' => $products]);
    }

    public function displayProducts()
    {
        return view('product-list');
    }

    public function displayID(int $id)
    {
        return view('product-details', ['id' => $id]);

    }
}
