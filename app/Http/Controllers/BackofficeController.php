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
            'price' => 'bail|required',
        ]);

        Product::create([
            "name" => $request->name,
            "price" => $request->price,
            "weight" => $request->weight,
            "description" => $request->description,
            "categories_id" => $request->categories_id,
        ]);

        return redirect(route("backoffice.productslist"));
    }


    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required|numeric',
        ]);
        $product->update([
            "name" => $request->input('name'),
            "description" => $request->input('description'),
            "price" => $request->input('price'),
            "discount" => $request->input('discount'),
            "weight" => $request->input('weight'),
            "url_image" => $request->input('url_image'),
            "quantity" => $request->input('quantity') ?? 1,
            "available" => $request->input('available') ?? 1,

        ]);

        return redirect(route('backoffice.productslist'));
    }

    public function create1()
    {
        return view('backoffice.create');
    }
}
