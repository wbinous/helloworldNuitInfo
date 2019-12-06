@extends('layout')

@section('contenu')
<div class="container">
    <form action="{{ action('ConnexionController@traitement') }}" method="post" class="section">
        {{ csrf_field() }}

        <div class="field">
            <label class="label">Nom d'utilisateur</label>
            <div class="control">
                <input class="input" type="text" name="nomutilisateur" value="{{ old('email') }}">
            </div>
            @if($errors->has('email'))
            <p class="help is-danger">{{ $errors->first('email') }}</p>
            @endif
        </div>

        <div class="field">
            <label class="label">Mot de passe</label>
            <div class="control">
                <input class="input" type="password" name="password">
            </div>
            @if($errors->has('password'))
            <p class="help is-danger">{{ $errors->first('password') }}</p>
            @endif
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Se connecter</button>
            </div>
        </div>
    </form>
</div>
@endsection
