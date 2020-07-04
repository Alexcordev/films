<?php 

session_start();
include_once ('connectdb.php');
session_destroy();
$del = mysqli_query($conn,"Truncate table locations");
header('location: ../guest/index.php#popup1');
?>