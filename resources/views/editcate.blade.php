<a class="button is-info" href="{{ route('adminHome') }}">Accueil</a>


<h1>Modifier joueurs</h1>

<form method="post" action="{{ route('category.update', $categories->id) }}">
    @method('PATCH')
    @csrf
    <div class="field">
        <label class="label">Catégorie</label>
        <div class="select">

        </div>
    </div>
    <div class="form-group mb-3">
        <label for="name">Nom</label>
        <input type="text" class="form-control" id="name" placeholder="Entrer le nom de jouet"
               name="name"
               value="{{ $categories->name }}">
    </div>



    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

