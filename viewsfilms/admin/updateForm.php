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

include_once '../controller/connectdb.php';
require_once '../navigation/navAdmin.php';

$id = $_REQUEST['id'];
$query = "SELECT * from films where id='$id'";
$r = $conn->query($query);
$row = $r->fetch_assoc();

?>
        <div style="height: 80vh" class="container req-box" >
        <center><h3 style="margin-bottom:50px;"><span style="font-weight:bold; color: #6AC045">Mettre à jour le film</span></h3></center>
            <form action="updateMovie.php" method="post">
                <div class="row">
                    <div class="col-md-6 box1">
                        <label for="titre">Titre:</label><br>
                        <input type="text" name="titre" class="log-input" value="<?php echo $row['titre']; ?>"><br><br>
                        <label for="dir">Réalisateur:</label><br>
                        <input type="text" name="dir" class="log-input" value="<?php echo $row['realisateur']; ?>"><br><br>
                        <label for="categ">Catégorie:</label><br>
                        <select class="log-input" id="select" name="categ">
                        <option><?php echo $row['categorie']; ?></option>
                            <option value="Action">Action</option>
                            <option value="Drame">Drame</option>
                            <option value="Comedie">Com&eacute;die</option>
                            <option value="Science-fiction">Science-Fiction</option>
                            <option value="Horreur">Horreur</option>
                            <option value="Suspense">Suspense</option>
                            <option value="Noel">Noël</option>
                            <option value="Quebecois">Qu&eacute;b&eacute;cois</option>
                            <option value="Famille">Famille</option>
                        </select>

                    </div>

                    <div class="col-md-6 box1">
                        <label for="duree">Durée:</label><br>
                        <input type="text" name="duree" class="log-input" value="<?php echo $row['duree']; ?>"><br><br>
                        <label for="prix">Prix:</label><br>
                        <input type="text" name="prix" class="log-input" value="<?php echo $row['prix']; ?>"><br><br>
                        <label for="url">Url de la vidéo:</label><br>
                        <input type="text" name="lien" class="log-input" value="<?php echo $row['lien']; ?>"><br><br>


                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                        <input type="hidden" name="id" class="log-input" value="<?php echo $row['id']; ?>">
                            <input type="submit" class="btnAdminUpd btn-success" name="update" value="Mettre à jour">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <?php
include_once '../templates/footer.php';
?>