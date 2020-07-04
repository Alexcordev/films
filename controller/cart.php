<?php

   session_start();
   include_once ('connectdb.php');
   

   $id = $_GET['id'];
   $del = mysqli_query($conn,"delete from locations where id = '$id'"); // delete query

   if($del)
   {
       mysqli_close($conn); 
       header('location: ../user/cart.php#success2'); 
       exit;	
   }
   else
   {
       echo "Une erreur est survenue lors de la requête au serveur"; 
   }

    
    
?>