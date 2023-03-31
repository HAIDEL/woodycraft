<form method="POST" action="{{ route('products.register') }}">
    @csrf

    <div>
        <label for="name">Nom:</label>

        <div>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
        </div>
    </div>

    <div>
        <label for="email">Adresse email:</label>

        <div>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>
        </div>
    </div>

    <div>
        <label for="password">Mot de passe:</label>

        <div>
            <input id="password" type="password" name="password" required>
        </div>
    </div>

    <div>
        <label for="password_confirmation">Confirmer le mot de passe:</label>

        <div>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
        </div>
    </div>

    <div>
        <div>
            <button type="submit">
                S'inscrire
            </button>
        </div>
    </div>
</form>
