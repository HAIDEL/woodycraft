<a class="button is-info" href="{{ route('products.index') }}">Accueil</a>

<h1>Ajouter un Jouet</h1>




<form action="{{ route('products.store') }}" method="POST">
    @csrf
<div class="field">
    <label class="label">Catégories</label>
    <div class="select">
        <select name="category_id" id="category_id">
            @foreach($categories as $categories)
                <option value="{{ $categories->id }}">{{ $categories->name }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group mb-3">
    <label for="name">Nom :</label>
    <input type="text" class="form-control" id="name" placeholder="Entrez un Nom" name="name">
</div>

<div class="form-group mb-3">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" placeholder="Description" name="description">
</div>


<div class="form-group mb-3">
    <label for="price">Prix : </label>
    <input type="text" class="form-control" id="price" placeholder="Prix" name="price">
</div>

<div class="form-group mb-3">
    <label for="quantity">Quantité </label>
    <input type="text" class="form-control" id="quantity" placeholder="Quantité" name="quantity">
</div>


<button type="submit" class="btn btn-primary">Enregister</button>
</form>

