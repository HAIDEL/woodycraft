<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Page Client</title>
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





<div class="row">
    <div class="col-md-8 offset-md-2">

    <a class="btn btn-outline-dark" href="{{ route('adminHome') }}">Accueil</a>

<h1>Produits Archivé</h1>

@foreach ($products as $product)
    @if ($product && ($product->status == 1 || ($product->categories && $product->categories->status == 1)))
        <div class="product">
            <div class="name">Nom du produit : {{ $product->name }}</div>
            <div class="name">Quantité : {{ $product->quantity }}</div>

            <form action="{{ route('products.actived',$product->id )}}" method="post">
                @csrf
                <input class="btn btn-success" type="submit" value="Réactiver">
            </form>

        </div>
    @else
        @continue
    @endif
@endforeach
    </div>
</div>
</html>
