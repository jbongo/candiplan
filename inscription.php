<?php
session_start();
?>
<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Space Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    
    <!-- CSS -->
    <!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- <link rel="stylesheet" href="css/animate.css"> -->
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- Js -->
    <!-- <script src="js/vendor/modernizr-2.6.2.min.js"></script> -->
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script> -->
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/owl.carousel.min.js"></script> -->
    <script src="js/plugins.js"></script>
    <!-- <script src="js/min/waypoints.min.js"></script> -->
    <!-- <script src="js/jquery.counterup.js"></script> -->

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/google-map-init.js"></script>


    <script src="js/main.js"></script>


  </head>
  <body>
    <!-- Header Start -->
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- header Nav Start -->
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.html">
                    <img src="img/logo1.png" alt="Logo">
                  </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="#">Aide</a></li>
                    <li><a href="connexion.php">Connexion</a></li>
                    <li><a href="inscription.php">Inscription</a></li>
                  </li>
                </ul>
                </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
            </div>
          </div>
        </div>
        </header><!-- header close -->
        
        <!-- Slider Start -->
        <section id="global-header">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block">
                  <h1>S'inscrire</h1>
                  <p>Inscrit toi et commence à utiliser ton application Candiplan.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- contact form start -->
        <section id="contact-form">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="block">

                  <form method="post" action="#">
                    <div>
                      <legend>INSCRIPTION</legend>
                    </div>
                   
                    <div class="form-group">
                      <label>Email:</label>
                      <input type="email" id="email" class="form-control" placeholder="Votre Email " name="email" required="">
                    </div>
                    <div class="form-group">
                      <label>Mot de passe:</label>
                      <input type="password" class="form-control" placeholder="Votre Mot de Passe" name="password" required="">
                    </div>
                    <div class="form-group">
                      <label>Confirmation Mot de passe:</label>
                      <input type="password" class="form-control" placeholder="Votre Mot de Passe" name="confirmPassword" required="">
                    </div>
                    
                  
                    <button class="btn btn-default" type="submit">S'inscrire</button>

                    <p>Tu es déjà inscrit? <a href="connexion.php"> connecte toi maintenant...</a></p>
                  </form>
                </div>
              </div>

                <?php
                    require("inscription.class.php");
                    $inscription = new Inscription();

                    $inscription->sinscrire();


                ?>

              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <h2>Nous contacter</h2>
                  <ul class="address-block">
                    <li>
                      <i class="fa fa-map-marker"></i>5 rue des montains
                    </li>
                    <li>
                      <i class="fa fa-envelope-o"></i>Email: contact@mail.com
                    </li>
                    <li>
                      <i class="fa fa-phone"></i>Phone:+88 01672 506 744
                    </li>
                  </ul>

                  <ul class="social-icons">

                    <li>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </section>
        <!-- Call to action Start -->
        <section id="call-to-action">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block">
                  <h2>Que pense tu de Candiplan?</h2>
                  <p> Tu es inscris et tu utilise Candiplan? Raconte nous ton témoignage. Laisse nous un message par mail à temoignages@candiplan.fr</p>
                  <a class="btn btn-default btn-call-to-action" href="mailto:temoignages@candiplan.fr" >Envois nous un mail</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- footer Start -->
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="footer-manu">
                  <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="#">Aide</a></li>
                    <li><a href="#">Connexion</a></li>
                    <li><a href="inscription.php">Inscription</a></li>
                  </ul>
                </div>
                
              </div>
            </div>
          </div>
        </footer>
        
        
        
      </body>
    </html>