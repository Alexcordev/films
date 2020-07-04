<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../guest/index.php');
} else {
    if ($_SESSION['status'] != "admin") {
        header('location: ../user/index.php');
    }
}
include_once '../controller/connectdb.php';

$id = $_GET['id'];
$del = mysqli_query($conn, "delete from films where id = '$id'");

if ($del) {
    mysqli_close($conn);
    header('location: index.php#successDel');
    exit;
} else {
    echo "Une erreur est survenue lors de la requête au serveur";
}
?>