<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>BTR-BATIR | Connexion</title>



    <!-- Font Icon -->

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">



    <!-- Main css -->

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php
        require('config.php');
        session_start();

        if (isset($_POST['email'])){
            $email = stripslashes($_REQUEST['email']);
            $email = mysqli_real_escape_string($conn, $email);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($conn, $password);
            $query = "SELECT * FROM `utilisateurs` WHERE email='$email' and password='".hash('sha256', $password)."'";
            $result = mysqli_query($conn,$query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
                if($rows==1){
                    $_SESSION['email'] = $email;
                    header("Location: http://btr-batir.ovh");
                }else{
                    $message = "L'email ou le mot de passe est incorrect.";
                  }
                }
?>

    <div class="main">



        <!-- Sing in  Form -->

        <section class="sign-in">

            <div class="container">

                <div class="signin-content">

                    <div class="signin-image">

                        <figure><img src="images/BTR-BATIR.png" alt="sing up image"></figure>

                        <a href="https://btr-batir.ovh/inscription" class="signup-image-link">Créer un
                            compte</a>

                    </div>



                    <div class="signin-form">

                        <h2 class="form-title">Se connecter</h2>

                        <form method="POST" class="register-form" id="login-form">

                            <div class="form-group">

                                <label for="email"><i class="zmdi zmdi-email"></i></label>

                                <input type="email" name="email" id="email" placeholder="Email" required />

                            </div>

                            <div class="form-group">

                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>

                                <input type="password" name="your_pass" id="your_pass" placeholder="Mot de passe"
                                    required />

                            </div>

                            <div class="form-group">

                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />

                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Se souvenir
                                    de moi</label>

                            </div>

                            <div class="form-group form-button">

                                <input type="submit" name="signin" id="signin" class="form-submit"
                                    value="Se connecter" />

                            </div>

                        </form>

                        <?php if (! empty($message)) { ?>
                        <p class="errorMessage"><?php echo $message; ?></p>
                        <?php } ?>

                        <div class="social-login">

                            <span class="social-label">Or login with</span>

                            <ul class="socials">

                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>

                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>

                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </section>



    </div>



    <!-- JS -->

    <script src="vendor/jquery/jquery.min.js"></script>

    <script src="js/main.js"></script>

</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>