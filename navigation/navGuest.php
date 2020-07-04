<?php


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ciné Xtra</title>
    
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>

    <!-- CSS Compressé et minifié-->
    <link rel=" stylesheet " href="../css/bootstrap.min.css ">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    
</head>

<body>
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark fixed-top ">
        
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <a class="navbar-brand" href="../index.php">
        <i class="fa fa-video-camera" aria-hidden="true"></i>
        </a><span class="brand-name">&nbsp;Cin&eacute; Xtra&nbsp;</span>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link active" href="../guest/allmovies.php"><i style="font-size: 30px; vertical-align: middle;" class="fa fa-film" aria-hidden="true"></i>&nbsp;Nos films</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../guest/categories.php"><i style="font-size: 30px; vertical-align: middle;" class="fa fa-tag" aria-hidden="true"></i>&nbsp;Catégories</a>
            </li>
        </ul>
        </div>
        
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
                <a style="border: 0" data-toggle="modal" data-target="#exampleModal" class="nav-link" href=""><i style="font-size: 30px; vertical-align: middle;" class="fa fa-user" aria-hidden="true" ></i>&nbsp;Devenir membre</a>
            </li>
            <li class="nav-item">
            <a style="border: 0" data-toggle="modal" data-target="#exampleModal1" class="nav-link" href=""><i style="font-size: 30px; vertical-align: middle;" class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Connexion</a>
            </li>
        </ul>
        </div>
            
    </nav>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content text-center">
      <div class="modal-header bg-light">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center bg-secondary">
          <h2 class="text-white">Inscription</h2>
            <div class="log-content">
                <form action="../controller/register.php" method="post">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Entrez votre nom" name="fullname" class="log-input" required>
                    <br>
                    <i class="fa fa-envelope"></i>
                    <input type="email" placeholder="Entrez votre courriel" name="email" class="log-input" required>
                    <br>
                    <i class="fa fa-link"></i>
                    <input type="text" placeholder="Nom d'utilisateur" name="username" class="log-input" required>
                    <br>
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Mot de passe" name="password" class="log-input" required>
                    <br>
                    <i class="fa fa-map-marker"></i>
                    <input type="text" id="addHelp" placeholder="Adresse" name="address" class="log-input" required>
                    <small id="addHelp" class="form-text text-white">Nom de la rue, ville, province, code postal</small>
                    <br>
                    <br>
                    <input type="submit" value="M'inscrire" name="signup-btn" class="btn-log">
                </form>
            </div>
        </div>
    </div>
      </div>
      
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content text-center">
      <div class="modal-header bg-light">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center bg-secondary">
          <h2 class="text-white">Connexion</h2>
           <div class="log-content">
                <form action="../controller/login.php" method="post">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Nom d'utilisateur" name="username" class="log-input" required>
                    <br>
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Mot de passe" name="password" class="log-input" required>
                    <br>
                    <br>
                    <input type="submit" value="Connexion" name="signup-btn" class="btn-log">
                </form>
            </div>
        </div>
    </div>
    </div>
      
    </div>
  </div>
</div>