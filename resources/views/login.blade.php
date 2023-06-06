<H1> Se connecter </H1>
<a class="button is-info" href="{{ route('products.index') }}">Page d'accueil</a>

<form method="POST" action="{{ route('Custom.login') }}"><br>
    @csrf

    <div class="form-group mb-3">
        <label for="username">Email de connexion</label>
        <input type="text" class="form-control" id="email" placeholder="Email" name="email">
    </div>

    <div class="form-group mb-3">
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" id="password" placeholder="Mot de passe" name="password">
    </div>

    <div>
        <div>
            <button type="submit"> Se connecter </button>
        </div>

    </div>
</form>
