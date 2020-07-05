<?php
$conn = new mysqli('localhost','root','','bdfilms');

if ($conn->connect_error) {
   die("Erreur : Impossible d'établir la connexion à la base de données".$conn->connect_error);
} 

?>