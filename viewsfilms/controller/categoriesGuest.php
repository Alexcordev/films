<!--
    Auteur: Alexandre Cormier;
    Matricule: 748947;
    Code Permanent: CORA 2902 7602
    Login: cormiea
-->

<?php
session_start();

include_once '../controller/connectdb.php';

require_once '../navigation/navLeft.php';

require_once '../navigation/navGuest.php';

$action = $_POST["categ"];

?>


<div class="container">
        <div style="height: 85vh; margin-top: 90px" class="row ml-5">

<?php
$sql = "SELECT * FROM films WHERE categorie = '" . $action . "' ORDER BY titre ASC";
$listeFilms = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($listeFilms)) {
    $id = $row['id']?>
      <div class="col-lg-4 mb-4">
        <div class="card text-center text-white bg-transparent border-light" style="width: 18rem;">
        <a data-toggle="modal" data-target="#basicExampleModal<?php echo ++$id; ?>">
  <img name="img" style="cursor:pointer" src="../../pochettes/<?php echo $row["pochette"]; ?>" width=120 height=210 class="card-img-top" alt="pochette"data-toggle="tooltip" title="Voir le Trailer">

        </a>
        <div class="modal fade modal-xl" id="basicExampleModal<?php echo $id++; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-xl" role="document">
  <div class="modal-content bg-dark">
    <div class="modal-header">
      <h5 class="modal-title text-warning" id="exampleModalLabel"><?php echo $row["titre"]; ?></h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div style="display: flex" class="modal-body">
    <iframe width="620" height="440" src="https://www.youtube-nocookie.com/embed/<?php echo $row["lien"]; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="card bg-dark text-white border-secondary" style="width: 18rem;">
  <div class="card-header bg-secondary text-white">
  <?php echo $row["titre"]; ?>
  </div>
  <ul class="list-group list-group-flush text-white ">
    <li class="list-group-item bg-dark border-secondary">Réalisateur: <?php echo $row["realisateur"]; ?></li>
    <li class="list-group-item bg-dark border-secondary">Catégorie: <?php echo $row["categorie"]; ?></li>
    <li class="list-group-item bg-dark border-secondary">Durée: <?php echo $row["duree"] . " min"; ?></li>
    <li class="list-group-item bg-dark border-secondary">Prix: <?php echo $row["prix"] . " $"; ?></li>
  </ul>
</div>
    </div>
        <div class="modal-footer">
      <button type="button" class="btn btn-warning" data-dismiss="modal">Fermer</button>

    </div>
  </div>
</div>
</div>
  <div class="card-body">
    <h5 class="card-title text-warning"><?php echo $row["titre"]; ?></h5>
    <p class="card-text"><?php echo $row["realisateur"]; ?></p>
    <p class="card-text"><?php echo $row["categorie"]; ?></p>
    <div class="form-group">

  </div>
    <p class="card-text"><?php echo $row["prix"] . " $"; ?></p>


    </div>

    </div>
    </div>

<?php
}
?>


</div>
</div>
<?php include_once '../templates/footer.php';