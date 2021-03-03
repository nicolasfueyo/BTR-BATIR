<?php

date_default_timezone_set('Europe/Paris');

?>


<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>BTR - BATIR | Inscription</title>



    <!-- Font Icon -->

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">



    <!-- Main css -->

    <link rel="stylesheet" href="css/style.css">

</head>

<body>



    <div class="main">



        <!-- Sign up form -->

        <section class="signup">

            <div class="container">

                <div class="signup-content">

                    <div class="signup-form">

                        <h2 class="form-title">Inscription</h2>

                        <?php
require('config.php');
if (isset($_REQUEST['nom'], $_REQUEST[`prenom`], $_REQUEST[`ville`], $_REQUEST[`adresse`], $_REQUEST[`cp`], $_REQUEST['email'], $_REQUEST['password'])){
    if(empty($_POST['email'])){//le champ mail est vide
        echo '<a id="annotation">le champ mail est vide.</a>';
    } elseif(!preg_match("#^[a-zA-Z0-9]+$#",$_POST['nom'])){//le champ nom est renseigné mais ne convient pas au format qu'on souhaite qu'il soit, soit: que des lettres minuscule + des chiffres (je préfère personnellement enregistrer le pseudo de mes membres en minuscule afin de ne pas avoir deux pseudo identique mais différents comme par exemple: Admin et admin)
        echo '<a id="annotation">Le nom doit être renseigné sans accents, sans caractères spéciaux.</a>';
    } elseif(!preg_match("#^[a-zA-Z0-9]+$#",$_POST['prenom'])){//le champ prenom est renseigné mais ne convient pas au format qu'on souhaite qu'il soit, soit: que des lettres minuscule + des chiffres (je préfère personnellement enregistrer le pseudo de mes membres en minuscule afin de ne pas avoir deux pseudo identique mais différents comme par exemple: Admin et admin)
        echo '<a id="annotation">Le prenom doit être renseigné sans accents, sans caractères spéciaux.</a>';
    } elseif(strlen($_POST['cp'])>6){//le code postale est trop long, il dépasse 5 chiffres
        echo '<a id="annotation">Le code postal est trop long, il dépasse 5 chiffres.</a>';
    } elseif(strlen($_POST['password'])<7){//le password est trop court, il faut au minimum 8 caractères
        echo '<a id="annotation">le mot de passe est trop court, il faut au minimum 8 caractères.</a>';
    } elseif(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM utilisateurs WHERE email='".$_POST['email']."'"))==1){//on vérifie que ce mail n'est pas déjà utilisé par un autre membre
        echo '<a id="annotation">Ce mail est déjà utilisé.</a>';
    } else {
        // récupérer le nom et supprimer les antislashes ajoutés par le formulaire
        $nom = stripslashes($_REQUEST['nom']);
        $nom = mysqli_real_escape_string($conn, $nom); 
        // récupérer le nom et supprimer les antislashes ajoutés par le formulaire
        $prenom = stripslashes($_REQUEST['prenom']);
        $prenom = mysqli_real_escape_string($conn, $prenom); 
        // récupérer le nom et supprimer les antislashes ajoutés par le formulaire
        $ville = stripslashes($_REQUEST['ville']);
        $ville = mysqli_real_escape_string($conn, $ville); 
        // récupérer le nom et supprimer les antislashes ajoutés par le formulaire
        $adresse = stripslashes($_REQUEST['adresse']);
        $adresse = mysqli_real_escape_string($conn, $adresse); 
        // récupérer le nom et supprimer les antislashes ajoutés par le formulaire
        $cp = stripslashes($_REQUEST['cp']);
        $cp = mysqli_real_escape_string($conn, $cp); 
        // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($conn, $email);
        // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        //requéte SQL + mot de passe crypté
        $query = "INSERT into `utilisateurs` (nom, prenom, ville, adresse, cp, email, password)
                VALUES ('$nom', '$prenom', '$ville', '$adresse', '$cp', '$email', '".hash('sha256', $password)."')";
        // Exécuter la requête sur la base de données
        $res = mysqli_query($conn, $query);
        if($res){
            echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='https://btr-batir.ovh/connexion/'>connecter</a></p>
            </div>";
        }
    }
}else{
?>

                        <form method="POST" class="register-form" id="register-form" action="">

                            <div class="form-group">

                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>

                                <input type="text" name="nom" id="nom" placeholder="Nom" required/>

                            </div>

                            <div class="form-group">

                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>

                                <input type="text" name="prenom" id="prenom" placeholder="Prenom" required/>

                            </div>

                            <div class="form-group">

                                <label for="name"><i class="zmdi zmdi-account material-icons-house"></i></label>

                                <input type="text" name="ville" id="ville" placeholder="Ville" required/>

                            </div>

                            <div class="form-group">

                                <label for="adresse"><i class="zmdi zmdi-account material-icons-name"></i></label>

                                <input type="text" name="adresse" id="adresse" placeholder="Adresse" required/>

                            </div>

                            <div class="form-group">

                                <label for="code postal"><i class="zmdi zmdi-account material-icons-name"></i></label>

                                <input type="text" name="cp" id="cp" placeholder="Code postal" required/>

                            </div>

                            <div class="form-group">

                                <label for="email"><i class="zmdi zmdi-email"></i></label>

                                <input type="email" name="email" id="email" placeholder="Email" required/>

                            </div>

                            <div class="form-group">

                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>

                                <input type="password" name="password" id="pass" placeholder="Mot de passe" required/>

                            </div>

                            <div class="form-group">

                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>

                                <input type="password" name="re_password" id="re_pass" placeholder="Confirmer votre mot de passe" required/>

                            </div>

                            <!-- <div class="form-group">

                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>

                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>

                            </div> -->

                            <div class="form-group form-button">

                                <input type="submit" name="signup" id="signup" class="form-submit" value="S'inscrire"/>

                            </div>

                        </form>
                        
                        <?php } ?>

                    </div>

                    <div class="signup-image">

                        <figure><img src="images/BTR-BATIR.png" alt="sing up image"></figure>

                        <a href="https://btr-batir.ovh/connexion/" class="signup-image-link">Je suis déja inscrit</a>

                    </div>

                </div>

            </div>

        </section>



    </div>



    <!-- JS -->

    <script src="vendor/jquery/jquery.min.js"></script>

    <script src="js/main.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>