@extends('layout')

@section('contenu')
<div class="container">
    <form action="{{ action('ConnexionController@inscrireUtilisateur') }}" method="post" class="section">
        {{ csrf_field() }}
        <div class="field">
            <label class="label">Nom d'utilisateur</label>
            <div class="control">
                <input class="input" type="text" name="nomutilisateur" placeholder="Nom d'utilisateur">
            </div>
        </div>
        <div class="field">
            <label class="label">Nom</label>
            <div class="control">
                <input class="input" type="text" name="nom" placeholder="Nom">
            </div>
        </div>
        <div class="field">
            <label class="label">Prénom</label>
            <div class="control">
                <input class="input" type="text" name="prenom" placeholder="Prenom">
            </div>
        </div>
        <div class="field">
            <label class="label">Université</label>
            <div class="control">
                <input class="input" type="text" name="universite" placeholder="Université">
            </div>
        </div>
        <div class="field">
            <label class="label">Date de naissance</label>
            <div class="control">
                <input class="input" type="date" name="dateNaissance">
            </div>
        </div>
        <div class="field">
            <label class="label">Email</label>
            <div class="control has-icons-left">
                <input class="input" type="email" name="email" placeholder="Email">
                <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                </span>
            </div>
        </div>
        <div class="field">
            <label class="label">Mot de passe</label>
            <div class="control has-icons-left">
                <input class="input" type="password" name="password" placeholder="Mot de passe">
                <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                </span>
            </div>
        </div>
        <div class="field">
            <label class="label">Retaper mot de passe</label>
            <div class="control has-icons-left">
                <input class="input" type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)">
                <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                </span>
            </div>
        </div>
        <div class="field">
            <label class="label">Description</label>
            <div class="control">
                <textarea class="textarea" name="description" placeholder="Decrivez-vous..."></textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <input class="button is-link" type="submit" value="M'inscrire">
            </div>
        </div>
    </form>
</div>
@endsection
