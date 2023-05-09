
<a class="button is-info" href="{{ route('products.index') }}">Page d'accueil</a>
@if($errors->all())
    @foreach($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach
@endif
<form method="POST" action="{{ route('store.order') }}">
    @csrf
    <div class="form-group mb-3">
        <label for="firstname">Prénom</label>
        <input type="text" class="form-control"  placeholder="Entrez un Prénom" name="firstname">
    </div>

    <div class="form-group mb-3">
        <label for="lastname">Nom</label>
        <input type="text" class="form-control"  placeholder="Nom" name="lastname">
    </div>


    <div class="form-group mb-3">
        <label for="add1">Adresse numéro 1 (obligatoire)</label>
        <input type="text" class="form-control"  placeholder="Adresse numéro 1" name="add1">
    </div>
    <div class="form-group mb-3">
        <label for="add2">Adresse numéro 2 (facultatif)</label>
        <input type="text" class="form-control"  placeholder="Adresse numéro 2" name="add2">
    </div>

    <div class="form-group mb-3">
        <label for="city">Ville </label>
        <input type="text" class="form-control"  placeholder="Ville" name="city">
    </div>
    <div class="form-group mb-3">
        <label for="phone">Numéro de téléphone </label>
        <input type="text" size="10" class="form-control"  placeholder="Numéro de téléphone" name="phone">
    </div>

    <div class="form-group mb-3">
        <label for="postcode">Code postal </label>
        <input type="text" class="form-control"  placeholder="Code postal" name="postcode">
    </div>

    <div class="form-group mb-3">
        <label for="email">Mail </label>
        <input type="email" class="form-control"  placeholder="Mail" name="email">
    </div>
    <div class="form-group mb-3">
        <label for="paiement"> Moyen de paiement </label>
        <select name="paiement" size="1">
            <option selected value ="VISA"> Carte VISA </option>
            <option value ="MASTERCARD"> MASTERCARD </option>
            <option value ="CHEQUE"> CHEQUE </option>
        </select>
    </div>

    <input type="submit" value="Commander">
</form>

