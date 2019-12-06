@extends('layout')

@section('contenu')

<div class="container">
    <img src="{{ asset('image/precarite.jpeg') }}" width="100%"/>

    <div class="content is-medium">
        <h2>Des associations peuvent aussi vous aider</h2>
        <ul>
            <li>
                <h3><a href="https://www.ageparis.org/etudiants-internationaux/" target="_blank">Etudiants étrangers (dans Paris)</a></h3>
            </li>
            <li>
                <h3><a href="https://www.gisti.org/spip.php?article132" target="_blank">Etudiants sans papiers</a></h3>
            </li>
            <li>
                <h3>Etudiants handicapés</h3>
                <ul>
                    <li><a href="https://www.gisti.org/spip.php?article132">Arpejeh</a></li>
                    <li><a href="https://fedeeh.org/">Fedeeh</a></li>
                </ul>
            </li>
            <li>
                <h3><a href="https://www.restosducoeur.org/">Les restos du cœur</a></h3>
            </li>
            <li>
                <h3><a href="https://www.croix-rouge.fr/">La croix rouge</a></h3>
            </li>
        </ul>
    </div>
</div>

@endsection
