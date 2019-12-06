@extends('layout')

@section('contenu')

<div class="container">
  <img src="{{ asset('image/precarite.jpeg') }}" width="100%"/>

  <div class="content is-medium">
    <h1>Besoin d'aide pour votre santé </h1>
    <div>
      <h2>La complémentaire santé</h2>
      En plus de la sécurité sociale vous pouvez avoir une assurance complémentaire de santé qui vous aidera à compléter les remboursement de l'assurance maladie.
      <a href=https://www.ameli.fr/assure/droits-demarches/difficultes-acces-droits-soins/complementaire-sante/complementaire-sante-solidaire>Cliquez-ici</a>
    </div>
    <div>
      <h2>Informations pour vous soigner </h2>
      Si vous voulez avoir beaucoup plus d'Informations sur les avantages de la complémentaire santé.
      <a href="https://www.etudiant.gouv.fr/cid114047/complementaire-sante-mutuelles.html">Cliquez-ici</a>
    </div>
  </div>
</div>

@endsection
