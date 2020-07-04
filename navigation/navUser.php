<?php

session_start();

include_once "../controller/connectdb.php"; 
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ciné Xtra</title>
    
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>
   
    <link rel=" stylesheet " href="../css/bootstrap.min.css ">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">   
</head>

<nav class="navbar navbar-expand-sm bg-secondary navbar-dark fixed-top ">
        
<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <a class="navbar-brand" href="../index.php">
        <i class="fa fa-video-camera" aria-hidden="true"></i>
        </a><span class="brand-name">&nbsp;Cin&eacute; Xtra&nbsp;</span>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link active" href="../user/movies.php"><i style="font-size: 30px; vertical-align: middle;" class="fa fa-film" aria-hidden="true"></i>&nbsp;Nos films</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../user/browse.php"><i style="font-size: 30px; vertical-align: middle;" class="fa fa-tag" aria-hidden="true"></i>&nbsp;Catégories</a>
            </li>
        </ul>
        </div>
        
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" href="../user/cart.php"><i class="fa fa-cart-arrow-down fa-2x" aria-hidden="true"></i></a>
            </li>
        <li class="nav-item">
                <a class="nav-link" href="../user/profile.php"><?php echo $_SESSION['username'] ?></a>
            </li>
        
            <li class="nav-item dropdown dropleft">
                <a class="nav-link" href="#" data-toggle="dropdown">
                    <img src="../image/default-user.png" style="width:30px; border-radius:50%;" alt="logo ">
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item disabled" style="color:silver; text-transform:lowercase;" href="../user/profile.php?username=<?php echo $_SESSION['username'] ?>"><?php echo $_SESSION['username'] ?></a>
                    <a class="dropdown-item" style="color:#fff;" href="../controller/logout.php">D&eacute;connexion</a>
                </div>
            </li>
        </ul>
        </div>
            
    </nav>
