<!DOCTYPE html>
<html>
<head>
    <title>Récapitulatif commande</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Modification de Produits</title>
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



        body {
            padding: 20px;
        }
        .cart-table {
            width: 100%;
        }
        .cart-total {
            font-weight: bold;
        }
        .checkout-btn {
            margin-top: 20px;
        }
        .home-link {
            margin-top: 20px;
        }

    </style>
</head>




<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="signup-box">


<a class="btn btn-outline-dark" href="{{ route('adminHome') }}">Accueil</a>


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

            </div>
        </div>
    </div>
</div>
