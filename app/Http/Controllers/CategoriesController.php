<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('product-categories', [
            'categories' => Categorie::orderBy('name')->get(),
            ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Categorie $categorie)
    {
        //
    }

    public function edit(Categorie $categorie)
    {
        //
    }

    public function update(Request $request, Categorie $categorie)
    {
        //
    }

    public function destroy(Categorie $categorie)
    {
        //
    }
}
