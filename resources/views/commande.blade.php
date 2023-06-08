<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .signup-box {
            max-width: 600px;
            margin: 0 auto;
            padding: 40px 30px;
            border: 1px solid #d6d6d6;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .signup-box h2 {
            font-weight: 600;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-group label {
            font-weight: 500;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        @media (min-width: 768px) {
            .signup-box {
                margin-top: 80px;
            }
        }
    </style>
</head>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2">
            <div class="signup-box">
<a class="btn btn-outline-dark" href="{{ route('products.index') }}">Page d'accueil</a>
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

    <input type="submit" class="btn btn-primary" value="Commander">
</form>
            </div>
        </div>
    </div>
</div>

</html>



