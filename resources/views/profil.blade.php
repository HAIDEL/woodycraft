<!DOCTYPE html>
<html>
<head>
    <title>Récapitulatif commande</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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
<a class="btn btn-outline-dark" href="{{ route('products.index') }}">Page d'accueil</a>
<a class="btn btn-outline-dark" href="{{ route('profil.edit') }}">Modifier le profil</a><br>



<p>
                <h5 class="card-title">Profil de {{ $user->name }}</h5>
    <strong>Nom </strong> <td> {{ $customers->forname }} <br></td>
    <strong>Prénom </strong> <td> {{ $customers->surname }} <br></td>
    <strong>Adresse 1 </strong> <td> {{ $customers->add1 }} <br></td>
    <strong>Adresse 2 </strong> <td>{{ $customers->add2 }} <br></td>
    <strong>Adresse 3 </strong> <td>{{ $customers->add3 }} <br></td>
    <strong>Code Postal </strong> <td>{{ $customers->postcode }} <br></td>
    <strong>Numéro de téléphone </strong><td> {{ $customers->phone }} <br></td>
    <strong>Adresse mail </strong> <td>{{ $user->email }} <br></td>
</p>
            </div>
        </div>
    </div>
</div>

</table>
</div>
</html>

