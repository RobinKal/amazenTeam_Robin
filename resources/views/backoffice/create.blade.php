
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
          action="{{ route('products.store')}}">

        @csrf
        <div class="col-2 m-1 background">
            <label>Name</label>
            <input id="name" name="name" type="text" value="">
        </div>

            <div class="col-2 m-1 background">
                <label>Description</label>
                <textarea id="description" name="description"></textarea>
            </div>

            <div class="col-2 m-1 background">
                <label>Weight</label>
                <input id="weight" name="weight" type="number" value="">
            </div>


            <div class="col-2 m-1 background">
                <label>Price</label>
                <input id="price" name="price" type="number" value="">
            </div>

{{--        <div class="col-2 m-1 background">--}}
{{--            <label>Categorie</label>--}}
{{--            <input id="categorie_id" name="categorie_id" type="number" value="">--}}
{{--        </div>--}}

        <label for="categorie_id">Select a categorie:</label>
        <select name="categorie_id" id="pet-select">
            <option value="1">Catégorie 1</option>
            <option value="2">Catégorie 2</option>
            <option value="3">Catégorie 3</option>
            <option value="4">Catégorie 4</option>
        </select>

            <button type="submit" class="btn btn-primary">
                Create Product
            </button>
    </form>
</div>
</div>
</form>
