<!--
    Auteur: Alexandre Cormier;
    Matricule: 748947;
    Code Permanent: CORA 2902 7602
    Login: cormiea
-->

<?php
session_start();
include_once 'connectdb.php';

$img = $_POST['imgLink'];
$title = $_POST['title'];
$qty = $_POST['quantite'];
$prix = $_POST['price'];

$add = mysqli_query($conn, "INSERT INTO locations (img,titre,qty,prix) values('$img','$title','$qty','$prix')");

if ($add) {
    mysqli_close($conn);
    header('location: ../user/browse.php#success5');

    exit;
} else {
    echo "Une erreur est survenue lors de la requête au serveur";
}
