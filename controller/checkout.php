<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../guest/index.php');
} else {
    if ($_SESSION['status'] == "admin") {
        header('location: ../admin/index.php');
    }
}
require_once '../navigation/navUser.php';
require_once '../templates/popUpDeleteSucc.php';
require_once '../templates/popUpEmptyCart.php';
include_once '../controller/connectdb.php';

?>

<body>


<div style="margin: 70px auto auto auto; width: 60%; height:80vh" class="container">
<div class="headerCart">
<span><a class="btn1 btn btn-warning" href="../user/cart.php">Retour au panier</a></span>
<h1>Résumé de vos achats</h1>
</div>
<div class="row box">
  <div class="col-lg-12 box5">
  <table class="table table-hover table-dark tableCart">
  <thead>
    <tr>
      <th scope="col">Pochette</th>
      <th scope="col">Titre</th>
      <th scope="col">Quantité</th>
      <th scope="col">Prix</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php

$sql = "SELECT * FROM locations";
$result = $conn->query($sql);
$total = $result->num_rows;
$subTotal = 0;
if ($total > 0) {
    $listeFilms = mysqli_query($conn, $sql);
    foreach ($listeFilms as $ligne) {
        $id = $ligne['id'];
        ?>
    <tr>
      <td><img src="../pochettes/<?php echo $ligne['img']; ?>" width="50px" height="70px"></td>
      <td><?php echo $ligne['titre']; ?></td>
      <td><?php echo $ligne['qty']; ?></td>
      <td><?php echo $ligne['prix']; ?></td>


    </tr><?php

        $subTotal += $ligne['qty'] * $ligne['prix'];
        $tps = 0;
        $tvq = 0;
        $total = 0;

    }

} else {
    echo '<h1 class="cartHeaderTitle">Aucun item ajouté à votre panier</h1>';
}

$tvq = $subTotal * 0.0975;
$tps = $subTotal * 0.05;
$total = $subTotal + $tps + $tvq;
?>
  </tbody>
</table>

<div style="float: right" class="card text-center bg-transparent text-white text-xl-right" style="width: 18rem;">
  <div class="card-body">
    <p class="card-text">Sous-total: <?php echo number_format((float) $subTotal, 2, '.', '') . " $"; ?></p>
    <p class="card-text">TVQ: <?php echo number_format((float) $tps, 2, '.', '') . " $"; ?></p></p>
    <p class="card-text">TPS: <?php echo number_format((float) $tvq, 2, '.', '') . " $"; ?></p>
    <p class="card-text">Total: <?php echo number_format((float) $total, 2, '.', '') . " $"; ?></p>
    <button type="button" class="btn1 btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Payer
</button>
  </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Procéder au paiement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <div style="float: right" class="card text-center bg-transparent text-dark text-xl-right" style="width: 18rem;">
  <div class="card-body">
    <p class="card-text">Sous-total: <?php echo number_format((float) $subTotal, 2, '.', '') . " $"; ?></p>
    <p class="card-text">TVQ: <?php echo number_format((float) $tps, 2, '.', '') . " $"; ?></p></p>
    <p class="card-text">TPS: <?php echo number_format((float) $tvq, 2, '.', '') . " $"; ?></p>
    <p class="card-text">Total: <?php echo number_format((float) $total, 2, '.', '') . " $"; ?></p>

  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-success">Procéder au paiement</button>
      </div>
    </div>
  </div>
</div>
<?php
$conn->close();
?>
  </div>
</div>
</div>
<?php include_once '../templates/footer.php';
