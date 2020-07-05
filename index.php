<!--
    Auteur: Alexandre Cormier;
    Matricule: 748947;
    Code Permanent: CORA 2902 7602
    Login: cormiea
--><?php
session_start();

if (!isset($_SESSION['username'])) {
    header('location: viewsfilms/guest/index.php');
}
elseif (isset($_SESSION['username']) == "admin") {
    header('location: viewsfilms/admin/index.php');
}
else{ 
    header('location: viewsfilms/user/index.php');
}

?>