<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductController extends Controller
{
    public Collection $products;

    public function listOfProductsByName()
    {
        return view('product-list', ['products' => Product::orderBy('name')->get()]);
    }

    public function listOfProductsByPrice()
    {
        return view('product-list', ['products' => Product::orderBy('price')->get()]);
    }

    public function displayProducts()
    {
        return view('product-list');
    }

    public function displayID(int $id)
    {
        return view('product-details', ['product' => Product::find($id)]);
    }
}
