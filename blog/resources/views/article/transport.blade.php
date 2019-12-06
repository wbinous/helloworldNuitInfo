@extends('layout')

@section('contenu')

<div class="container">
    <img src="{{ asset('image/precarite.jpeg') }}" width="100%"/>

    <div class="content is-medium">
        <h1>Les avantages possibles pour le transport</h1>
        Il existe différents avantages pour vos déplacements :
        <div>
            <h2>SNCF</h2>
            La SNCF propose plusieurs réductions pour les jeunes et les étudiants <a href=" https://www.aide-sociale.fr/aide-sncf-des-reductions-pour-les-etudiants-et-jeunes-de-26-ans-voyager-entre-50-et-100/">site</a>
        </div>
        <div>
            <h2>Les avantages du forfait Imagine R </h2>
            <a href="https://www.sncf.com/fr/offres-voyageurs/cartes-tarifs-idf/tarifs-jeunes-etudiants-idf/imagine-r">SNCF</a>
            <p>
                <a href="https://www.etudiant.gouv.fr/cid119358/transports-en-commun-comment-se-deplacer-moins-cher.html"> Si vous voulez plus d'information sur les transports en commun. </a>
            </p>
        </div>
    </div>
</div>

@endsection
