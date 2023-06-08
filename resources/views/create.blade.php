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

<a class="btn btn-outline-dark" href="{{ route('adminHome') }}">Accueil</a>

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
            </div>
        </div>
    </div>
</div>

