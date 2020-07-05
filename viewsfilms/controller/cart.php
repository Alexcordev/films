<!--
    Auteur: Alexandre Cormier;
    Matricule: 748947;
    Code Permanent: CORA 2902 7602
    Login: cormiea
-->

<?php

session_start();
include_once 'connectdb.php';

$id = $_GET['id'];
$del = mysqli_query($conn, "delete from locations where id = '$id'");

if ($del) {
    mysqli_close($conn);
    header('location: ../user/cart.php#success2');
    exit;
} else {
    echo "Une erreur est survenue lors de la requête au serveur";
}
