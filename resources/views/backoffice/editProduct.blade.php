<div class="container-full row ptblr-5 d-flex justify-content-around">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="form-horizontal" role="form" method="POST"
          action="{{ route('products.update', $product->id)  }}">
        @csrf
        @method('PUT')
        <h1>{{$product->name}}</h1>
        <div class="col-2 m-1 background">
            <label>Name</label>
            <input id="name" name="name" type="text" value="{{$product->name}}">
        </div>

        <div class="col-2 m-1 background">
            <label>Description</label>
            <textarea id="description" name="description">{{$product->description}}</textarea>
        </div>

        <div class="col-2 m-1 background">
            <label>Price</label>
            <input id="price" name="price" type="number" value="{{$product->price}}">
        </div>

        <div class="col-2 m-1 background">
            <label>Discount</label>
            <input id="discount" name="discount" type="number" value="{{$product->discount}}">
        </div>

        <div class="col-2 m-1 background">
            <label>Weight</label>
            <input id="weight" name="weight" type="number" value="{{$product->weight}}">
        </div>

        <div class="col-2 m-1 background">
            <label>Url de l'image</label>
            <textarea id="url_image" name="url_image">{{$product->url_image}}</textarea>
        </div>

        <div class="col-2 m-1 background">
            <label>Quantity</label>
            <input id="quantity" name="quantity" type="number" value="{{$product->quantity}}">
        </div>

        <div class="col-2 m-1 background">
            <label>Available</label>
            <input id="available" name="available" type="number" value="{{$product->available}}">
        </div>

        <div class="col-2 m-1 background">
            <label>Categorie</label>
            <input id="categorie_id" name="categorie_id" type="number" value="{{$product->categorie_id}}">
        </div>

        <button type="submit" class="btn btn-primary">
            Save
        </button>
    </form>
</div>
</div>
</form>
