@extends('layout')

@section('contenu')

<div class="container">
  <img src="{{ asset('image/precarite.jpeg') }}" width="100%"/>

  <div class="content is-medium">
    <h1>Les avantages dans le loisir</h1>
    <div>
      <h2><a href="file:///C:/Users/litis/Downloads/liste_MF.pdf">Les Musées gratuit pour les moins de 25 ans</a></h2>
    </div>
    <div>
      <h2>
        <a href="http://etudiant.aujourdhui.fr/etudiant/sortir/recherche/gratos.html">Diverse sorties gratuite</a>
      </h2>
    </div>
    <div>
      <h2>Cours de danse gratuit</h2>
      <a href="http://rock.ueensam.org/">Salsa et Rock tous les lundis et mardis soirs à Paris.</a>
    </div>
  </div>
</div>
@endsection
