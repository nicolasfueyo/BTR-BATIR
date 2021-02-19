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
  // récupérer le nom et supprimer les antislashes ajoutés par le formulaire
  $nom = stripslashes($_REQUEST['nom']);
  $nom = mysqli_real_escape_string($conn, $nom); 
  // récupérer le nom et supprimer les antislashes ajoutés par le formulaire
  $prenom = stripslashes($_REQUEST['prenom']);
  $prenom = mysqli_real_escape_string($conn, $prenom); 
  // récupérer le nom et supprimer les antislashes ajoutés par le formulaire
  $ville = stripslashes($_REQUEST['ville']);y
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
    $query = "INSERT into `utilisateur` (nom, prenom, ville, adresse, cp, email, password)
              VALUES ('$nom', '$prenom', '$ville', '$adresse', '$cp', '$email', '".hash('sha256', $password)."')";
  // Exécuter la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
       </div>";
    }
}else{
?>

                        <form method="POST" class="register-form" id="register-form">

                            <div class="form-group">

                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>

                                <input type="text" name="nom" id="name" placeholder="Nom" required/>

                            </div>

                            <div class="form-group">

                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>

                                <input type="text" name="prenom" id="name" placeholder="Prenom" required/>

                            </div>

                            <div class="form-group">

                                <label for="name"><i class="zmdi zmdi-account material-icons-house"></i></label>

                                <input type="text" name="ville" id="name" placeholder="Ville" required/>

                            </div>

                            <div class="form-group">

                                <label for="adresse"><i class="zmdi zmdi-account material-icons-name"></i></label>

                                <input type="text" name="adresse" id="adresse" placeholder="Adresse" required/>

                            </div>

                            <div class="form-group">

                                <label for="code postal"><i class="zmdi zmdi-account material-icons-name"></i></label>

                                <input type="text" name="cp" id="cp" placeholder="Nom" required/>

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

                            <div class="form-group">

                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>

                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>

                            </div>

                            <div class="form-group form-button">

                                <input type="submit" name="signup" id="signup" class="form-submit" value="S'inscrire"/>

                            </div>

                        </form>
                        
                        <?php } ?>

                    </div>

                    <div class="signup-image">

                        <figure><img src="images/BTR-BATIR.png" alt="sing up image"></figure>

                        <a href="https://btr-batir.000webhostapp.com/connexion/" class="signup-image-link">Je suis déja inscrit</a>

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