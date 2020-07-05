<!--
    Auteur: Alexandre Cormier;
    Matricule: 748947;
    Code Permanent: CORA 2902 7602
    Login: cormiea
-->

<?php 

session_start();
include_once ('connectdb.php');
session_destroy();
$del = mysqli_query($conn,"Truncate table locations");
header('location: ../guest/index.php#popup1');
?>