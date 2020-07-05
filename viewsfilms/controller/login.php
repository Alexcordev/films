<!--
    Auteur: Alexandre Cormier;
    Matricule: 748947;
    Code Permanent: CORA 2902 7602
    Login: cormiea
-->

<?php
session_start();
include_once 'connectdb.php';

$username = $_POST['username'];
$password = $_POST['password'];

$q = "SELECT * FROM connexion WHERE utilisateur = '$username' && mdp = '$password'";

$res = $conn->query($q);
$num = mysqli_num_rows($res);
$_SESSION['nav-path'] = '../navigation/navGuest.php';
if ($num == 1) {

    $_SESSION['username'] = strtolower($username);

    if ($_SESSION['username'] == "admin@gmail.com") {
        header('location: ../admin/index.php');
        $_SESSION['nav-path'] = '../navigation/navAdmin.php';
        $_SESSION['status'] = 'admin';
    } else {
        header('location: ../user/index.php');
        $_SESSION['status'] = 'user';
        $_SESSION['nav-path'] = '../navigation/navUser.php';
    }
} else {
    header('location: ../guest/index.php#error1');

}
$conn->close();
