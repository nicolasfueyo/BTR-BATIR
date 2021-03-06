<?php
  session_start();
  date_default_timezone_set('Europe/Paris');
?>
<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <title>BTR BATIR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Style.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top" id="banniere">
        <a class="navbar-brand" href="#">
            </a><a href="index.php"> <img src="images/2.png" class="rounded-circle" alt="LOGO" th="170" height="120"></a>
        <button class="navbar-toggler mr_auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <div class="mr-auto"></div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="dropdown">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                            Nos Préstations
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="constru.html">Construction Maison et Petit Immeuble</a>
                            <a class="dropdown-item" href="renoext.html">Rénovation et Extension</a>
                            <a class="dropdown-item" href="couviso.html">Couverture et Isolation</a>
                        </div>&emsp;
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                            Contact & Devis
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="****">Contact</a>
                            <a class="dropdown-item" href="****">Devis</a>
                        </div>&emsp;
                </li>
                <li class="nav-item">
                    <div class="dropdown pull-right">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" class="active">
                            Mon Compte
                        </button>
                        <div class="dropdown-menu">
                        <?php
	                    if (!isset($_SESSION['email'])){
                           echo '<a class="dropdown-item" href="connexion/index.php">Connexion</a>
                            <a class="dropdown-item" href="inscription/index.php">Inscription</a>';
                        }
                        else {
                            echo '<a class="dropdown-item" href="connexion/deconnexion.php">Deconnexion</a>';
                         } ?>
                        </div>
                        </div>
                    </ul>
        </div>
    </nav>
    <style>
        #banniere
    {
    
        height: 20%;
    
        width: 100%;
    
        background-image:url(images/Bannière-Acteurs-Coliving.png));
    }
    h1 {
    color: black;
    text-align: center; 
}
h2{
    color: red;
    text-align: center;
}
p {
    font-family: verdana;
    font-size: 15px;
}

    
    </style>
<div class="jumbotron text-center">
    <h1>BTR Bâtir - Accueil</h1>
    <p>Des traveaux pour vos besoins. </p>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h2>Nos Prestations</h2>
            <h5><a href="#" class="text-dark">Construction Maison et Petit Immeuble </a></h5>
            <h5><a href="#" class="text-dark">Rénovation et Extension</a></h5>
            <h5><a href="#" class="text-dark"> Couverture et Isolation</a></h5>
        </div>
        <div class="col-sm-8">

            <h2> Qui sommes-nous?</h2>
            <h5><a href="Plus%20qu'un%20métier.html" class="text-dark">Plus qu'un métier ...</a></h5>
            <h5><a href="Nous%20vous%20accompagnons.html" class="text-dark">Nous vous accompagons..</a></h5>
        </div>
        <div class="col-sm-12">
            <h2>Le projet pour vos travaux.</h2>
            <h5><a href="#" class="text-dark">Vos proposition de vos devis en plusieurs étape</a></h5>
        </div>
    </div>
</div>

</body>
<footer class="bg-light text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <a href="index.html"></a> <img src="images/2.png" alt="LOGO" width="190" height=""></a>

                <p><h6><b>Leader du Bâtiment</b></h6></p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-8 mb-md-0">
                <h5 class="text-uppercase"><h5><b>NOS PRESTATIONS</b></h5>
                <br>
               
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#" class="text-dark"><h6>Construction Maison et Petit Immeuble</h6></a>
                    </li>
                    <li>
                        <a href="#" class="text-dark"><h6>Rénovation et Extension</h6></a>
                    </li>
                    <li>
                        <a href="#" class="text-dark"><h6>Couverture et Isolation</h6></a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-0"><h5><b>CONTACT</b></h5>
                <br>
                <ul class="list-unstyled">
                    <li>
                    <a href="mailto:btrbatir@hotmail.com" class="text-dark"><h6>Email : btrbatir@hotmail.com</h6></a>
                    </li>
                    <li>
                        
                        <a href="#!" class="text-dark"><h6>Téléphone : 06.09.44.83.80</h6></a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark"><h6>Adresse : 23 Rue Viete,<br>75017 Paris 17e</h6> </a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
       <h6>© 2021 Copyright: 2021 BTR Bâtir.fr</h6> 
    </div>
    <!-- Copyright -->
</footer>
</html>
