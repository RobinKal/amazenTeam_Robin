@extends('layout')

@section('content')
    <div class="container-full row ptblr-5 d-flex justify-content-around">
        <h1>LISTE DE PRODUITS PAR CATEGORIES</h1>

        @foreach($categories as $categorie)
            <div class="col-2 m-1 background">
                <h1 class="text-center">{{$categorie->name}}</h1>
                <h3>{{$categorie->description}}</h3>
                @foreach($categorie->product as $product)
                    <p>{{$product->name}}</p>
                @endforeach

            </div>
        @endforeach
    </div>
@endsection
