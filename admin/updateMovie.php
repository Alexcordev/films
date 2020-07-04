
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('location: ../guest/index.php');
} else {
    if ($_SESSION['status'] != "admin") {
        header('location: ../user/index.php');
    }
}
include('../controller/connectdb.php');
require_once '../navigation/navAdmin.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $dir = $_POST['dir'];
    $categ = $_POST['categ'];
    $duree = $_POST['duree'];
    $prix = $_POST['prix'];
    $url = $_POST['lien'];
    

    $q = "SELECT * FROM films WHERE id = '$id'";

    $res = $conn->query($q);
    $num = mysqli_num_rows($res);  

    if ($num > 1) {
            echo "error";
            header('location: index.php#error');
    } else {
    
        $sql = "UPDATE films SET titre='$titre', realisateur='$dir', categorie ='$categ', duree='$duree', prix='$prix', lien='$url' WHERE id='$id'";
        $result = $conn -> query($sql);
        header('location: index.php#updatesuccess');
    }
}

?>


