<a class="button is-info" href="{{ route('products.index') }}">Page d'accueil</a>
<a class="button is-info" href="{{ route('profil.user') }}">Profil</a>

<h1>Modifier le profil</h1>

<form action="{{ route('profil.update', $customers->id) }}" method="POST" class="form">

@csrf


    </div>
    <div class="form-group mb-3">
        <label for="forname">Nom</label>
        <input type="text" class="form-control" id="forname" placeholder="Nouveau Nom" name="forname"
               value="{{ $customers->forname }}">
    </div>
    <div class="form-group mb-3">
        <label for="forname">Prénom</label>
        <input type="text" class="form-control" id="forname" placeholder="Nouveau Prénom"
               name="surname"
               value="{{ $customers->surname }}">
    </div>
    <div class="form-group mb-3">
        <label for="add1">Adresse 1</label>
        <input type="text" class="form-control" id="add1" placeholder="Nouvelle Adresse"
               name="add1"
               value="{{ $customers->add1 }}">
    </div>
    <div class="form-group mb-3">
        <label for="add2">Adresse 3</label>
        <input type="text" class="form-control" id="add2" placeholder="Nouvelle Adresse"
               name="add2"
               value="{{ $customers->add2 }}">
    </div>
    <div class="form-group mb-3">
        <label for="add3">Adresse 2</label>
        <input type="text" class="form-control" id="add3" placeholder="Nouvelle Adresse"
               name="add3"
               value="{{ $customers->add3 }}">
        <div class="form-group mb-3">
            <label for="postcode">Code postal</label>
            <input type="text" class="form-control" id="postcode" placeholder="Code postal"
                   name="postcode"
                   value="{{ $customers->postcode }}">
        </div>
        <div class="form-group mb-3">
            <label for="phone">Numéro de téléphone</label>
            <input type="text" class="form-control" id="phone" placeholder="phone"
                   name="phone"
                   value="{{ $customers->phone }}">
            <div class="form-group mb-3">
                <label for="email">Adresse email</label>
                <input type="text" class="form-control" id="email" placeholder="email"
                       name="email"
                       value="{{ $user->email }}">
            </div>
        </div>
    </div>



    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
