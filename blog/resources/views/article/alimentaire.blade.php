@extends('layout')

@section('contenu')
<div class="container">
    <img src="{{ asset('image/precarite.jpeg') }}" width="100%"/>

    <div class="content is-medium ">
        <h2>Besoin d'aide alimentaire</h2>
        <ul>
            <li>
                <h3><a href="https://www.banquealimentaire.org/trouver-de-laide-240" target="_blank">La Banque Alimentaire</a></h3>
            </li>
            <li>
                <h3><a href="https://api-site.paris.fr/images/72866" target="_blank">Les épiceries sociales </a></h3>
                <span>Il y en a 700 en France. Vous y trouverez divers produits pour pas cher.<span>
            </li>
            <li>
                <h3><a href="http://www.crous-paris.fr/restauration/les-lieux-de-restauration/ouverture-des-restaurants-et-des-cafeterias-universitaires/" target="_blank">
                    Restaurants Crous
                </a></h3>
                <span>Vous permettrons d'économiser tout en mangeant un repas chaud.</span>
            </li>
        </ul>
    </div>
</div>
@endsection
