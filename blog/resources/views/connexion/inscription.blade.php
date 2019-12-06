<form action="{{ action('ConnexionController@inscrireUtilisateur') }}" method="post">
    {{ csrf_field() }}
    <div class="field">
        <div class="control">
            <input type="text" name="nomutilisateur" placeholder="Nom d'utilisateur">
        </div>
    </div>
    <div class="field">
        <div class="control">
    <input type="text" name="nom" placeholder="Nom">
        </div>
    </div>
    <div class="field">
        <div class="control">
    <input type="text" name="prenom" placeholder="Prenom">
        </div>
    </div>
    <div class="field">
        <div class="control">
    <input type="text" name="universite" placeholder="Université">
        </div>
    </div>
    <div class="field">
        <div class="control">
    <input type="date" name="dateNaissance">
        </div>
    </div>
    <div class="field">
        <div class="control">
    <input type="email" name="email" placeholder="Email">
        </div>
    </div>
    <div class="field">
        <div class="control">
    <input type="password" name="password" placeholder="Mot de passe">
        </div>
    </div>
    <div class="field">
        <div class="control">
    <input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)">
        </div>
    </div>
    <div class="field">
        <div class="control">
    <textarea name="description" placeholder="Decrivez-vous..."></textarea>
        </div>
    </div>
    <div class="field">
        <div class="control">
    <input type="submit" value="M'inscrire">
    </div>
    </div>
</form>
