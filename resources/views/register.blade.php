<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Inscription</title>
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

<form method="POST" action="{{ route('users.register') }}">

    @csrf

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="signup-box">
                    <a class="btn btn-outline-dark" href="{{ route('products.index') }}">Page d'accueil</a>
                    <h2>Inscription</h2>
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
            </div>
        </div>
    </div>
    </div>
</form>
</html>
