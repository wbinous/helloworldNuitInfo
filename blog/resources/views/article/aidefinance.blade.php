@extends('layout')

@section('contenu')
<div class="container">
    <img src="{{ asset('image/precarite.jpeg') }}" width="100%"/>
    <div class="content is-medium">

        <h2>Besoin d'une aide financière </h2>
        <ul>
            <li>
                <h2><a href="https://wwwd.caf.fr/wps/portal/caffr/aidesetservices/lesservicesenligne/estimervosdroits/lelogement/">L'aide au logement (APL)</a></h2>
                Pour vous les étudiants vous avez le droit de demander une aide au logement qui vous permettra d'économiser de l'argent.
            </li>
            <li>
                <h2><a href="https://www.messervices.etudiant.gouv.fr/envole/">La bourse étudiante </a></h2>
                Vous pouvez demander une bourse et elle est donnée en fonction de vos critères sociaux.
            </li>
            <li>
                <h2>Assistance sociale </h2>
                Dans chaque université vous trouvez une ou des assistances sociales,si vous avez des difficultés financières vous pouvez vous en parlez à votre assistance sociale elle pourra vous apporter une aide financière.
            </li>
        </ul>
    </div>
</div>
@endsection
