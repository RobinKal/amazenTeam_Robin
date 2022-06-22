<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function display()
    {
        return view('backoffice.backoffice');
    }

    public function productList()
    {
        return view('backoffice.productList', ['products' => Product::all()]);
    }

    public function editProduct(int $id)
    {
        return view('backoffice.editProduct', ['product' => Product::find($id)]);
    }

    public function destroy(int $id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('backoffice/products');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail|required',
            'description' => 'bail|required|alpha',
            'weight' => 'bail|required|numeric',
            'price' => 'bail|required|numeric',
            'categorie_id' => 'bail|required|numeric'
        ]);

        Product::create([
            "name" => $request->name,
            "price" => $request->price,
            "weight" => $request->weight,
            "description" => $request->description,
            "categorie_id" => $request->categories_id,
        ]);

        return redirect(route("backoffice.productslist"));
    }


    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'name' => 'bail|required',
            'description' => 'bail|required|alpha',
            'price' => 'bail|required|numeric|gt:0',
            'discount' => 'numeric|nullable',
            'weight' => 'bail|required|numeric',
            'url_image' => 'bail|required|url',
            'quantity' => 'bail|required|numeric',
            'available' => 'bail|required|boolean',
            'categorie_id' => 'bail|required|numeric'
        ]);
        $product->update([
            "name" => $request->input('name'),
            "description" => $request->input('description'),
            "price" => $request->input('price'),
            "discount" => $request->input('discount') ?? NULL,
            "weight" => $request->input('weight'),
            "url_image" => $request->input('url_image'),
            "quantity" => $request->input('quantity') ?? 1,
            "available" => $request->input('available') ?? 1,
            "categorie_id" => $request->input('categorie_id')
        ]);

        return redirect(route('backoffice.productslist'));
    }

    public function create1()
    {
        return view('backoffice.create');
    }
}
