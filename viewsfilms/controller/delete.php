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
