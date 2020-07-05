<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../guest/index.php');
} else {
    if ($_SESSION['status'] == "admin") {
        header('location: ../admin/index.php');
    }
}
include_once '../controller/connectdb.php';
include_once '../navigation/navUser.php';
require_once '../navigation/navLeftUser.php';
require_once '../navigation/navRight.php';

?>

<body>



    <div class="container-fluid body">
        <div class="container">
            <div class="sbox">
                <h1>Rechercher par cat&eacute;gorie</h1>

        </div>
    </div>
</div>

<div class="container">

        <?php

$numOfCols = 3;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>
 <div class="row ml-5">
<?php
$sql = "SELECT * FROM films ORDER BY titre ASC";
$result = $conn->query($sql);

$listeFilms = mysqli_query($conn, $sql);
while ($row = $result->fetch_assoc()) {
    foreach ($result as $ligne) {
        $id = $ligne['id'];?>
        <div class="col-md-<?php echo $bootstrapColWidth; ?>">
        <div class="card text-center text-white bg-transparent border-light" style="width: 18rem;">


<form action="../controller/addToCart.php" method="post">
  <a data-toggle="modal" data-target="#basicExampleModal<?php echo ++$id; ?>">
  <img name="img" style="cursor:pointer" src="../../pochettes/<?php echo $ligne["pochette"]; ?>" width=120 height=210 class="card-img-top" alt="pochette"data-toggle="tooltip" title="Voir le Trailer">

        </a>
        <div class="modal fade modal-xl" id="basicExampleModal<?php echo $id++; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-xl" role="document">
  <div class="modal-content bg-dark">
    <div class="modal-header">
      <h5 class="modal-title text-warning" id="exampleModalLabel"><?php echo $ligne["titre"]; ?></h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div style="display: flex" class="modal-body">
    <iframe width="620" height="440" src="https://www.youtube-nocookie.com/embed/<?php echo $ligne["lien"]; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="card bg-dark text-white border-secondary" style="width: 18rem;">
  <div class="card-header bg-secondary text-white">
  <?php echo $ligne["titre"]; ?>
  </div>
  <ul class="list-group list-group-flush text-white ">
    <li class="list-group-item bg-dark border-secondary">Réalisateur: <?php echo $ligne["realisateur"]; ?></li>
    <li class="list-group-item bg-dark border-secondary">Catégorie: <?php echo $ligne["categorie"]; ?></li>
    <li class="list-group-item bg-dark border-secondary">Durée: <?php echo $ligne["duree"] . " min"; ?></li>
    <li class="list-group-item bg-dark border-secondary">Prix: <?php echo $ligne["prix"] . " $"; ?></li>
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
    <h5 class="card-title text-warning"><?php echo $ligne["titre"]; ?></h5>
    <p class="card-text"><?php echo $ligne["realisateur"]; ?></p>
    <p class="card-text"><?php echo $ligne["categorie"]; ?></p>
    <div class="form-group">
    <select style="width:25%;margin:auto auto;" class="form-control" id="formControlSelect" name="quantite">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
    <p class="card-text"><?php echo $ligne["prix"] . " $"; ?></p>
    <input type="hidden" name="imgLink" value="<?php echo $ligne["pochette"]; ?>"/>
    <input type="hidden" name="title" value="<?php echo $ligne["titre"]; ?>"/>
    <input type="hidden" name="price" value="<?php echo $ligne["prix"]; ?>"/>
    <button class="btnCart btn-warning text-dark" type="submit">
    Ajouter<i style="font-size:30px; vertical-align: middle; color: #001" class="fa fa-cart-plus" aria-hidden="true"></i>
</button>

    </div>
</form>
    </div>
    </div>

<?php
$rowCount++;
        if ($rowCount % $numOfCols == 0) {
            echo '</div><div class="row ml-5">';
        }

    }
    ?>

<?php

}
?>
</div>
</div>
<?php include_once '../templates/footer.php';?>


