<a class="button is-info" href="{{ route('adminHome') }}">Accueil</a>

<h1>Ajouter une catégorie</h1>




<form action="{{ route('category.store') }}" method="POST">
    @csrf
    <div class="field">
        <label class="label">Catégories</label>

    </div>
    <div class="form-group mb-3">
        <label for="name">Nom de catégorie :</label>
        <input type="text" class="form-control" id="name" placeholder="Entrez un Nom" name="name">
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
