<!--
    Auteur: Alexandre Cormier;
    Matricule: 748947;
    Code Permanent: CORA 2902 7602
    Login: cormiea
-->

<?php

include_once '../controller/connectdb.php';
require_once '../navigation/navAdmin.php';

$sql = "SELECT * FROM films ORDER BY titre ASC";
$result = $conn->query($sql);
$list = '';
$total = $result->num_rows;

if ($result->num_rows > 0) {

    $listeFilms = mysqli_query($conn, $sql);
    while ($ligne = mysqli_fetch_object($listeFilms)) {

        $list = $list . '
        <div class="row box">
        <div class="col-md-2 box4">
        <img src="../../pochettes/' . ($ligne->pochette) . '" width=80 height=120 class="user-profile">

        </div>
        <div class="col-md-6 box5">
            <p> <span style="color: #9a9a9a;">Titre: </span> ' . ($ligne->titre) . '<br>
             <span style="color: #9a9a9a;">Réalisateur: </span>' . ($ligne->realisateur) . '<br>
           <span style="color: #9a9a9a;">Catégorie: </span>' . ($ligne->categorie) . '<br>
           <p> <span style="color: #9a9a9a;">Durée: </span> ' . ($ligne->duree) . "min" . '<br>
           <span style="color: #9a9a9a;">Prix: </span>' . ($ligne->prix) . " $" . '<br>

            </p>
        </div>
        <div class="col-md-4 box5">
        <a class="btnAdmin btn-danger" href="deleteMovie.php?id=' . ($ligne->id) . '">Supprimer</a>
        <a class="btnAdmin btn-success" href="updateForm.php?id=' . ($ligne->id) . '">Modifier</a>
        </div>
    </div>
        ';
    }

} else {
    $list = "Aucun film de créé pour le moment";
}

$conn->close();
