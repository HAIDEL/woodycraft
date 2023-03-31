<form method="POST" action="{{ route('products.login') }}">
    @csrf

    <div>
        <label for="email">Adresse email:</label>

        <div>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>
    </div>

    <div>
        <label for="password">Mot de passe:</label>

        <div>
            <input id="password" type="password" name="password" required>
        </div>
    </div>

    <div>
        <div>
            <button type="submit">
                Se connecter
            </button>
        </div>
    </div>
</form>
