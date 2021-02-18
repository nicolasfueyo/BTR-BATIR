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
if (isset($_REQUEST['nom'], $_REQUEST[`prenom`], $_REQUEST[``],$_REQUEST['email'], $_REQUEST['password'])){
  // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username); 
  // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
  //requéte SQL + mot de passe crypté
    $query = "INSERT into `utilisateur` (username, email, password)
              VALUES ('$username', '$email', '".hash('sha256', $password)."')";
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

                                <input type="text" name="name" id="name" placeholder="Nom" required/>

                            </div>

                            <div class="form-group">

                                <label for="email"><i class="zmdi zmdi-email"></i></label>

                                <input type="email" name="email" id="email" placeholder="Email" required/>

                            </div>

                            <div class="form-group">

                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>

                                <input type="password" name="pass" id="pass" placeholder="Mot de passe" required/>

                            </div>

                            <div class="form-group">

                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>

                                <input type="password" name="re_pass" id="re_pass" placeholder="Confirmer votre mot de passe" required/>

                            </div>

                            <div class="form-group">

                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>

                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>

                            </div>

                            <div class="form-group form-button">

                                <input type="submit" name="signup" id="signup" class="form-submit" value="S'inscrire"/>

                            </div>

                        </form>

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