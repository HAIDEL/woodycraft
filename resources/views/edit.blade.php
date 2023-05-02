<a class="button is-info" href="{{ route('adminHome') }}">Accueil</a>


<h1>Modifier joueurs</h1>

    <form method="post" action="{{ route('products.update', $product->id) }}">
        @method('PATCH')
        @csrf
        <div class="field">
            <label class="label">Catégorie</label>
            <div class="select">
                <select name="category_id" id="category_id">
                    @foreach($categories as $categories)
                        <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" placeholder="Entrer le nom de jouet"
                   name="name"
                   value="{{ $product->name }}">
        </div>

        <div class="form-group mb-3">
            <label for="description">Description du jouet</label>
            <input type="text" class="form-control" id="description" placeholder="description"
                   name="description"
                   value="{{ $product->description }}">
        </div>

        <div class="form-group mb-3">
            <label for="price">Prix du jouet</label>
            <input type="text" class="form-control" id="price" placeholder="Prix du jouet"
                   name="price"
                   value="{{ $product->price }}">
        </div>

        <div class="form-group mb-3">
            <label for="quantity">Quantité</label>
            <input type="text" class="form-control" id="quantity" placeholder="quantité"
                   name="quantity"
                   value="{{ $product->quantity }}">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>

