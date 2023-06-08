<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Page de connexion</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .login-box {
            max-width: 400px;
            margin: 0 auto;
            padding: 40px 30px;
            border: 1px solid #d6d6d6;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .back-button {
            margin-bottom: 10px;
            text-align: center;
            color: #333;
        }

        .back-button:hover {
            text-decoration: none;
            color: #555;
        }

        .login-box h2 {
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

        .signup-link {
            text-align: center;
            margin-bottom: 20px;
        }

        .signup-link a {
            color: #007bff;
            font-weight: 500;
        }

        .signup-link a:hover {
            text-decoration: none;
            color: #0069d9;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2">
                <div class="login-box">
<a class="btn btn-outline-dark" href="{{ route('products.index') }}">Page d'accueil</a>

<form method="POST" action="{{ route('Custom.login') }}"><br>
    @csrf

    <div class="form-form-group">
        <label for="username">Email de connexion</label>
        <input type="text" class="form-control" id="email" placeholder="Email" name="email">
    </div>

    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" id="password" placeholder="Mot de passe" name="password">
    </div>

    <div>
        <div>
            <button type="btn btn-primary btn-block" class="btn btn-primary"> Se connecter </button>
        </div>

    </div>
    <div class="signup-link">
        <p>Vous n'avez pas de compte ? <a class="button is-info" href="{{ route('products.register') }}">Inscrivez-vous ici</a></p>
    </div>

</form>
            </div>
        </div>
    </div>
    </div>

