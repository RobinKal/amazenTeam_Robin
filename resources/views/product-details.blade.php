@extends('layout')

@section('content')

    @if(isset($product))



        <div class="container-full row ptblr-5 d-flex justify-content-around">
            <h1>Details of {{$product->name}}</h1>
            <div class="col-2 m-1 background">
                <h3 class="text-center">{{$product->name}}</h3>
                <p>{{$product->description}}</p>
                <p>{{$product->weight}} Gr</p>
                <img src="{{$product->url_image}}" width="80" height="80">
                <p>{{$product->price / 100}} €</p>
            </div>
        </div>

    @else
        <h1>Le produit n'est pas valide</h1>
    @endif

@endsection
