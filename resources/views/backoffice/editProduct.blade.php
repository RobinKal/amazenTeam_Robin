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

{{--        <div class="col-2 m-1 background">--}}
{{--            <label>Available</label>--}}
{{--            <input id="available" name="available" type="number" value="{{$product->available}}">--}}
{{--        </div>--}}

        <label for="available">Availability:</label>
        <select name="available" id="available">
            <option value="1">Available</option>
            <option value="0">Not Available</option>>
        </select>


        <label for="categorie_id">Select a categorie:</label>
        <select name="categorie_id" id="pet-select">
            <option value="1">Catégorie 1</option>
            <option value="2">Catégorie 2</option>
            <option value="3">Catégorie 3</option>
            <option value="4">Catégorie 4</option>
        </select>
        <button type="submit" class="btn btn-primary">
            Save
        </button>
    </form>
</div>
</div>
</form>
