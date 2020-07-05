<!--
    Auteur: Alexandre Cormier;
    Matricule: 748947;
    Code Permanent: CORA 2902 7602
    Login: cormiea
-->

<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('location: ../guest/index.php');
} else {
    if ($_SESSION['status'] != "admin") {
        header('location: ../user/index.php');
    }
}
require_once '../navigation/navAdmin.php';
include_once 'moviesList.php';

?>

    <div class="container req-box" >
        <form action="" method="post">
            <div class="row">
                <div class="col-md-10 box1">
                <a href="#popup2" class="btnAdmin btn-warning"> Ajouter un film</a>
                    <h3 style="margin-bottom:50px;"><span style="font-weight:bold; color: #d67900">Liste des films </span>(<?php echo $total ?>)</h3>

                    <?php

echo $list;
?>

                </div>
            </div>
        </form>

    </div>
    <?php
include "../templates/footer.php";
?>
    <div id="popup2" class="popup-overlay">
        <div class="log-popup">
            <h2>Ajouter un Film</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <form action="../controller/addmovie.php" enctype="multipart/form-data" method="post">
                    <i class="fa fa-link"></i>
                    <input type="text" placeholder="Titre du film" name="title" class="log-input" required>
                    <br>
                    <i class="fa fa-link"></i>
                    <input type="text" placeholder="Réalisateur" name="realisator" class="log-input" required>
                    <br>
                    <i class="fa fa-link"></i>
                    <select class="log-input" id="select" name="category" required>
                        <option>Choisir la catégorie</option>
                        <option value="Action">Action</option>
                        <option value="Classique">Classique</option>
                        <option value="Drame">Drame</option>
                        <option value="Comedie">Com&eacute;die</option>
                        <option value="Science-fiction">Science-Fiction</option>
                        <option value="Horreur">Horreur</option>
                        <option value="Suspense">Suspense</option>
                        <option value="Noel">Noël</option>
                        <option value="Quebecois">Qu&eacute;b&eacute;cois</option>
                        <option value="Famille">Famille</option>

                    </select>

                    <br>
                    <i class="fa fa-link"></i>
                    <input type="text" placeholder="Durée" name="time" class="log-input" required>
                    <br>
                    <i class="fa fa-link"></i>
                    <input type="text" placeholder="Prix" name="price" class="log-input" required>
                    <br>
                    <i class="fa fa-link"></i>
                    <input type="text" placeholder="Url Vidéo" name="lien" class="log-input" required>
                    <br>
                    <i class="fa fa-link"></i>
                    <select class="log-input" id="select" name="new" required>
                            <option>Actuellement à l'affiche ?</option>
                            <option value="1">Oui</option>
                            <option value="0">Non</option>
                        </select><br><br>
                    <label style="margin:auto auto 30px 0;color: #333">Pochette</label>
                    <input type="file" id="file" name="file" required>

                    <br>
                    <input type="submit" value="Ajouter" name="add-btn" class="btn-log">
                </form>
            </div>
        </div>

    </div>
    <div id="success" class="popup-overlay">
        <div class="log-popup">
            <h2>F&eacute;licitations!</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
               <p style="color:black">Le film a été ajouté</p>

            </div>
        </div>
    </div>
    <div id="updatesuccess" class="popup-overlay">
        <div class="log-popup">
            <h2>Opération réussie</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
               <p style="color:black">Le film a bien été mis à jour</p>
            </div>
        </div>
    </div>
    <div id="successDel" class="popup-overlay">
        <div class="log-popup">
            <h2>Opération Réussie</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
               <p style="color:black">Le film a bien été supprimé</p>
            </div>
        </div>
    </div>

    <?php

?>
