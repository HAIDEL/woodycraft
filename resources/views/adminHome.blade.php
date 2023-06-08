<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<title>Page Admin</title>
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
        .product-image img {
            max-width: 100%;
            height: auto;
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


    <div class="row">
        <div class="col-md-8 offset-md-2">


@if(session()->has('info'))
    <div>
        {{ session('info') }}
    </div>
@endif

<div class="card">
    <header class="card-header">

        <div class="select">
            <select onchange="window.location.href = this.value">
                <option value="{{ route('products.index') }}" @unless($name) selected @endunless> Toutes catégories </option>
                @foreach($categories as $category)
                    <option
                        value="{{ route('products.category', $category->name) }}" {{ $name == $category->name ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div><br>
        <a class="btn btn-outline-dark" href="{{ route('products.create') }}">Créer un jouet</a>
        <a class="btn btn-outline-dark" href="{{ route('category.create') }}">Créer une catégorie</a>
        <a class="btn btn-outline-dark" href="{{ route('category.view') }}">Voir les catégories</a>
        <a class="btn btn-outline-dark" href="{{ route('admin.archive') }}">Produits archivés</a>


        @guest

            <a class="button is-info" href="{{ route('products.login') }}">Se Connecter</a>
            <a class="button is-info" href="{{ route('products.register') }}">S'inscrire</a>
        @else

            <a class="btn btn-outline-dark" href="{{ route('signout') }}">Se déconnecter</a>


        @endguest

    </header>








    </div>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>

            <th>Catégorie</th>
            <th>Nom Jouet</th>
            <th>Description Jouet</th>
            <th>Prix Jouet</th>
            <th>Quantité Jouet</th>
            <th>Action</th>
            <th>Image</th>

        </tr>

        @foreach ($products as $index => $products)
            @if ($products && ($products->status == 0 || ($products->categories && $products->categories->status == 0)))

            <td>{{ $products->category_id }}</td>
                <td>{{ $products->name }}</td>
                <td>{{ $products->description }}</td>
                <td>{{ $products->price }}</td>
                <td>{{ $products->quantity }}</td>

                <td>
                    <a class="btn btn-info" href="{{ route('products.show', $products->id) }}">Voir</a>
                    <a class="btn btn-primary" href="{{ route('products.edit', $products->id) }}">Modifier</a>
                    <form action="{{ route('products.destroy', $products->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                    <form action="{{route('cart.add', $products->id)}}" method="POST">
                        @csrf


                    </form>

                </td>

            <td><img src="{{ URL::to($products->image) }}"/></td>


            </tr>
            @endif



        @endforeach
    </table>


            </div>
        </div>
    </div>

</html>
