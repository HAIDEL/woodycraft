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



    @csrf

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="signup-box">


<a class="btn btn-outline-dark" href="{{ route('products.index') }}">Page d'accueil</a>
<a class="btn btn-outline-dark" href="{{ route('profil.user') }}">Profil</a>
                    <h1>Modifier le profil</h1>


<form action="{{ route('profil.update', $customers->id) }}" method="POST" class="form">

@csrf



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

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </div>

</form>
                </div>

        </div>
    </div>
    </div>

</form>
</html>



