@extends('layout')

@section('contenu')
<div class="container">
     <img src="{{ asset('image/precarite.jpeg') }}" width="100%"/>
     <div class="content is-medium">
          <h1>Besoin d'aide pour votre logement</h1>
          Il existe différents types de logements utiles pour vous les étudiants :

          <h2>Les différentes résidences étudiantes</h2>
          <ul>
               <li><a href="https://www.adele.org/">Adele</a></li>
               <li><a href="https://clubetudiant.com/">Club étudiant</a></li>
               <li><a href="https://www.estudines.com/">Estudine</a></li>
               <li><a href=" https://www.nexity-studea.com/">Nexity studea</a></li>
               <li><a href=" https://www.fac-habitat.com/fr/">Fac habitat</a></li>
               <li><a href="https://www.suitetudes.com/">Suite études</a></li>
               <li><a href="https://www.lesbellesannees.com/">Les belles années</a></li>
               <li><a href="https://www.espacil.com/">Espacil habitat</a></li>
          </ul>
          <h2>Logements Crous</h2>
          Vous pouvez aussi faire une demande de logement étudiant au près du <a href="https://trouverunlogement.lescrous.fr/"></a>Crous</a> (Centre régional des œuvres universitaires et scolaires).
          <h2>Les logements étudiants urgents</h2>
          En cas d'urgence, vous pouvez visiter ce site pour vous aider à trouver une solution rapidement : <a href="https://www.letudiant.fr/lifestyle/logement_2/logement-etudiant-ou-trouver-un-toit-en-urgence-pour-la-rentree.html">Lien</a><br>
          Pour trouver un foyer de jeunes : <a href="http://www.arfj.asso.fr/trouver-un-foyer-pour-jeunes-travailleurs/">association des résidences et foyers de jeunes</a>
          <h2>Logements intergénérationnels</h2>
          Les logements intergénérationnels permettent à des étudiants de vivre gratuitement ou contre un petit loyer, chez une personne agée, en échange de service.
          <ul>
               <li><a href="http://ensemble2generations.fr/etudiants/">Ensemble2générations</a></li>
               <li><a href="https://reseau-cosi.org/faq/heberges/">COSI</a></li>
          </ul>
          <h2>Aide et conseil pour trouver votre logement</h2>
          <ul>
               <li><a href="https://www.uncllaj.org">UNCLLAJ</a></li>
          </ul>
     </div>
</div>
@endsection
