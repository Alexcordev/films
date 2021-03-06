<!--
    Auteur: Alexandre Cormier;
    Matricule: 748947;
    Code Permanent: CORA 2902 7602
    Login: cormiea
-->

<?php

include_once '../controller/connectdb.php';
include_once '../navigation/navGuest.php';
include_once '../templates/popUpAccExist.php';
include_once '../templates/popUpPassExist.php';
include_once '../templates/popUpSuccess.php';

?>

    <header>
        <div class="container body ">
            <center>
                <div class="inner-body ">
                    <h1 class="title ">Bienvenue sur
                        <span style="color: #d67900 ">Ciné Xtra</span>
                    </h1>
                    <p style="color: white" class="content">
                    Lorem ipsum
                        <span style="font-weight:bold; color: #d67900">dolor sit amet</span> |  consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua
                        <span style="font-weight:bold; color: #d67900">elit</span>
                    </p>
                </div>


            </center>
        </div>
    </header>


<div class="ratedMoviesHead">
            <h1>Présentement à l'affiche</h1>

        </div>


        <div style="display:flex; justify-content:center; align-content:center;" class="container-fluid">


 <div class="row mb-5">
<?php
$sql = "SELECT * FROM films WHERE new_release=1 ORDER BY titre ASC LIMIT 4";
$result = $conn->query($sql);

$listeFilms = mysqli_query($conn, $sql);

while ($row = $result->fetch_assoc()) {

    $id = $row["id"];?>
        <div class="col-lg-3">
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
    <p class="card-text"><?php echo $row["prix"] . " $"; ?></p>


    </div>

    </div>
    </div>

<?php
}
?>

</div>
</div>


<?php include_once '../templates/footer.php';?>