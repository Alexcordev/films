<!--
    Auteur: Alexandre Cormier;
    Matricule: 748947;
    Code Permanent: CORA 2902 7602
    Login: cormiea
-->

<?php

session_start();

include_once 'connectdb.php';

$del = mysqli_query($conn, "Truncate table locations");

if ($del) {
    mysqli_close($conn);
    header('location: ../user/cart.php#success3');
    exit;
} else {
    echo "Une erreur est survenue lors de la requête au serveur";
}
