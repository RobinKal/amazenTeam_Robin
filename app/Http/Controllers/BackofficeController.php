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

    public function editProduct( int $id )
    {
        return view('backoffice.editProduct', ['product' => Product::find($id)]);
    }

    public function destroy(int $id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('backoffice/product');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' =>'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->save();

        return redirect('backoffice/product');
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' =>'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);
        $product = Product::where('id', $id)->first();
        $product->update([
            "name" => $request->input('name'),
            "price" => $request->input('price'),
            "quantity" => $request->input('quantity'),
        ]);
//        $product->name = $request->input('name');
//        $product->price = $request->input('price');
//        $product->quantity = $request->input('quantity');
//        $product->save();

        return redirect(route('backoffice-productList'));
    }
}
