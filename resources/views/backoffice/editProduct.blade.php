<div class="container-full row ptblr-5 d-flex justify-content-around">
    <form class="form-horizontal" role="form" method="POST"
          action="{{ route('save-edit', $product->id)  }}">
        @if ($product->id)
            @method('PUT')
        @endif
        @csrf
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
                <label>Weight</label>
                <input id="weight" name="weight" type="number" value="{{$product->weight}}">
            </div>

            <div class="col-2 m-1 background">
                <label>Description</label>
                <textarea id="url_image" name="url_image">{{$product->url_image}}</textarea>
            </div>

            <div class="col-2 m-1 background">
                <label>Price</label>
                <input id="price" name="price" type="number" value="{{$product->price}}">
            </div>


            <button type="submit" class="btn btn-primary">
                Save
            </button>
    </form>
</div>
</div>
</form>
