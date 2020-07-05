<?php
session_start();
include_once '../controller/connectdb.php';
include_once '../navigation/navUser.php';
?>

<body>

<?php
$user = $_SESSION['username'];
$sql = "SELECT * FROM membres WHERE utilisateur='$user'";
$check = mysqli_query($conn, $sql) or die("erreur" . mysqli_error($conn));?>
<div style="margin-top: 5%; height: 85%" class="container">
<div class="row">
<div style="width: 30rem" class="mt-5 card text-center m-auto bg-transparent text-white border-secondary">

<?php
while ($row = mysqli_fetch_assoc($check)) {?>
      <div class="card-header bg-warning">
    Mon Profil
  </div>
  <img style="border-radius:50%; margin:20px auto;" src="../../image/default-user.png" width="100px" height="100px">
    <h5 class="card-title mt-3"><?php echo $row['nom']; ?></h5><br>
  <div class="card-body text-left">
    <p class="card-text">Nom d'utilisateur :&nbsp; <span class="user-infos"><?php echo $row["utilisateur"]; ?></span></p>
    <p class="card-text">Adresse :&nbsp; <span class="user-infos"><?php echo $row["adresse"]; ?></span></p>
    <p class="card-text">Courriel :&nbsp;<span class="user-infos"><?php echo $row["courriel"]; ?></span></p>
    <p class="card-text">Mot de passe :&nbsp; <span class="user-infos"><?php echo $row["mdp"]; ?></span></p>

  </div>
  <div class="card-footer text-muted bg-secondary">
  <?php $ymd = $row["date_inscription"];
    $timestamp = strtotime($ymd);
    $dmy = date("d-m-Y", $timestamp);?>
    Membre depuis le <?php echo $dmy; ?>
  </div>
   <?php
}
$conn->close();
?>
    </div>
</div>
    </div>
<?php include_once '../templates/footer.php';?>