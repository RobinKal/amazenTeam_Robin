<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Favicons -->
<meta name="theme-color" content="#7952b3">


<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    table {
        border-collapse: collapse; /* Les bordures du tableau seront collées (plus joli) */
    }

    td {
        border: 1px solid black;
        padding-left: 20px;
        padding-right: 20px;

    }

    th {
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 10px;
        border: 1px solid black;
    }


    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>


<!-- Custom styles for this template -->
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

<h1>LIST DES PRODUITS</h1>
<table>
    <thead>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>description</th>
        <th>price</th>
        <th>discount</th>
        <th>weight</th>
        <th>image Url</th>
        <th>quantity</th>
        <th>available</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->discount}}</td>
            <td>{{$product->weight}}</td>
            <td>{{ substr($product->url_image, 0, 60)}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->available}}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
            </td>
            <td>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('products.destroy', $product) }}"
                      onsubmit="return confirm('Are you sure you wish to delete this record?');">
                    @if ($product->id)
                        {{ method_field('DELETE') }}
                    @endif
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-2">
                            <button type="submit" class="btn btn-primary">
                                Delete
                            </button>
                        </div>
                    </div>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<a class="btn btn-primary" href="{{ route('products.create') }}">Create new product</a>
