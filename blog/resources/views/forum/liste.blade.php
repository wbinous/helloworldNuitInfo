<table class="table">
    <thead>
        <tr>
            <th>Sujet</th>
            <th>Nombre de réponses</th>
            <th>Auteur</th>
            <th>Date de création</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($data as $unSujet) : ?>
        <tr>
            <td><a href="voirSujet/<?= $unSujet->id ?>"><?= $unSujet->sujet ?></a></td>
            <td><?= $unSujet->nb_postes ?></td>
            <td><?= $unSujet->nom.' '. $unSujet->prenom ?></td>
            <td><?= $unSujet->dateMessage ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
