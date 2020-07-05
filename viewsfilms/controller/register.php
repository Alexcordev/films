<!--
    Auteur: Alexandre Cormier;
    Matricule: 748947;
    Code Permanent: CORA 2902 7602
    Login: cormiea
-->

<?php

session_start();

include_once 'connectdb.php';

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = strtolower($_POST['username']);
$address = $_POST['address'];
$password = $_POST['password'];

$q = "SELECT * FROM membres WHERE utilisateur = '$username' OR courriel = '$email'";

$res = $conn->query($q);
$num = mysqli_num_rows($res);

if ($num >= 1) {
    if ($_SESSION['username'] == "admin") {
        header('location: ../users/index.php#error');
    } else {
        header('location: ../guest/index.php#error');
    }
} else {
    $sql = "INSERT INTO membres (utilisateur,mdp,nom,courriel,date_inscription,adresse) values('$username','$password','$fullname','$email', NOW(), '$address')";
    $req = "INSERT INTO connexion (utilisateur,mdp,status) values('$username', '$password', 'user')";
    $result = $conn->query($sql);
    $result1 = $conn->query($req);

    if ($_SESSION['username'] == "admin") {
        header('location: ../admin/users.php#success');
    } else {
        header('location: ../guest/index.php#success');
    }
}
$conn->close();
