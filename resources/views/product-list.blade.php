@extends('layout')

@section('content')
    <div class="container-full row ptblr-5 d-flex justify-content-around">
        <h1>LISTE DE PRODUITS</h1>

        @foreach($products as $product)
            <div class="col-2 m-1 background">
                <h3 class="text-center">{{$product->name}}</h3>
                <p>{{$product->description}}</p>
                <p>{{$product->weight}} Gr</p>
                <img src="{{$product->url_image}}" width="80" height="80">
                <p>{{$product->price / 100}} €</p>
                <p>{{$product->categorie->name}}</p>

            </div>
        @endforeach
    </div>
@endsection
