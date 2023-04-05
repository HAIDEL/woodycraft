<h1> Crée un compte utilisateur </h1>

<form method="POST" action="{{ route('users.register') }}">
    @csrf

    <div class="form-group mb-3">
        <label for="forname">Entrez un Prénom</label>
        <input type="text" class="form-control" id="forname" placeholder="Entrez un Prénom" name="forname">
    </div>

    <div class="form-group mb-3">
        <label for="surname">Nom</label>
        <input type="text" class="form-control" id="surname" placeholder="Nom" name="surname">
    </div>
    <div class="form-group mb-3">
        <label for="name">Pseudo</label>
        <input type="text" class="form-control" id="name" placeholder="Pseudo" name="name">
    </div>

    <div class="form-group mb-3">
        <label for="email">Mail </label>
        <input type="email" class="form-control" id="email" placeholder="Mail" name="email">
    </div>
    <div class="form-group mb-3">
        <label for="add1">Adresse numéro 1 (obligatoire)</label>
        <input type="text" class="form-control" id="add1" placeholder="Adresse numéro 1" name="add1">
    </div>
    <div class="form-group mb-3">
        <label for="add2">Adresse numéro 2 (facultatif)</label>
        <input type="text" class="form-control" id="add2" placeholder="Adresse numéro 2" name="add2">
    </div>

    <div class="form-group mb-3">
        <label for="add3">Adresse numéro 3 (facultatif)</label>
        <input type="text" class="form-control" id="add3" placeholder="Adresse numéro 3" name="add3">
    </div>

    <div class="form-group mb-3">
        <label for="phone">Numéro de téléphone </label>
        <input type="text" size="10" class="form-control" id="phone" placeholder="Numéro de téléphone" name="phone">
    </div>

    <div class="form-group mb-3">
        <label for="postcode">Code postal </label>
        <input type="text" class="form-control" id="postcode" placeholder="Code postal" name="postcode">
    </div>
    <div class="form-group mb-3">
        <label for="password">Mot de Passe </label>
        <input type="password" class="form-control" id="password" placeholder="MOTDPASS" name="password">
    </div>




    <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>
