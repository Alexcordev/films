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
    header('location: ../user/movies.php#success1');
    exit;
} else {
    echo "Une erreur est survenue lors de la requête au serveur";
}
