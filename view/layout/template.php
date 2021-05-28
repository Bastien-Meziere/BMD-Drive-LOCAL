<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BMD Drive - Accueil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= IMAGE ?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= IMAGE ?>css/animate.css">
    <link rel="icon" type="image/ico" href="<?= IMAGE ?>images/logoppe2.png">
    
    <link rel="stylesheet" href="<?= IMAGE ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= IMAGE ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= IMAGE ?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?= IMAGE ?>css/aos.css">

    <link rel="stylesheet" href="<?= IMAGE ?>css/ionicons.min.css">

    <link rel="stylesheet" href="<?= IMAGE ?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= IMAGE ?>css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?= IMAGE ?>css/flaticon.css">
    <link rel="stylesheet" href="<?= IMAGE ?>css/icomoon.css">
    <link rel="stylesheet" href="<?= IMAGE ?>css/style.css">
  </head>
  <body class="goto-here">
    <div class="py-1 bg-primary">
      <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
          <div class="col-lg-12 d-block">
            <div class="row d-flex">
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                <span class="text">02 43 00 00 00</span>
              </div>
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                <span class="text">BMDDrive@gmail.com</span>
              </div>
              <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                <span class="text">Ouvert 7j/7</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
            <img src="<?= IMAGE ?>images/logoppe2.png"
            height="75px"
            width="75px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="<?=WEBROOT.'accueil'?>" class="nav-link">Accueil</a></li>
            <li class="nav-item"><a href="<?=WEBROOT.'produits'?>" class="nav-link">Produits</a></li>
              <!--<div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="<?//=WEBROOT.'produits/fruit'?>">Fruit</a>
                <a class="dropdown-item" href="<?//=WEBROOT.'produits/laitiers'?>">Produits Laitiers</a>
                <a class="dropdown-item" href="<?//=WEBROOT.'produits/viande'?>">Viande</a>
                <a class="dropdown-item" href="<?//=WEBROOT.'produits/pain'?>">Pain</a>
                <a class="dropdown-item" href="<?//=WEBROOT.'produits/boissons'?>">Boissons</a>
              </div>-->
            
            <li class="nav-item"><a href="<?=WEBROOT.'propos'?>" class="nav-link">A propos</a></li>
            <li class="nav-item"><a href="<?=WEBROOT.'contact'?>" class="nav-link">Contact</a></li>
            <li class="nav-item col-xs-12">
            <a class="nav-link js-scroll-trigger" href="
                <?php
                if(isset($_SESSION['clients']))
                    echo WEBROOT.'seconnecter/deconnect' ;
                else
                    echo WEBROOT.'seconnecter' ;
                 ?>
          ">
              <?php 
              if(isset($_SESSION['clients']) && !empty($_SESSION['clients'])) {
                    echo "Se d&eacute;connecter </a>"; 
              ?>
      
              <?php
              } else 
                  echo "Se connecter </a>"; 
              ?>
            <li class="nav-item cta cta-colored"><a href="<?=WEBROOT.'panier'?>" class="nav-link"><span class="icon-shopping_cart"></span>[<?php  if (isset($_SESSION['panier'])){ if($_SESSION['totalpanier']!=0) echo $_SESSION['totalpanier']; }?>]</a></li></a></li>

          </ul></div></div></nav></body>
        
<main role="main">

<?php 

    //var_dump($_SESSION); 
    //$_SESSION['test']==false;
    echo $content_for_layout 
?>
  
</main>

  <!-- Footer -->
  
  <footer class="ftco-footer ftco-section" style="background:#82ae46;">
      <div class="container">
        <div class="row align-items-center">
        </div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">BMD Drive</h2>
              <p>Les courses n'ont jamais été aussi proches de vous.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://twitter.com/home?lang=fr"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/?hl=fr"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="<?=WEBROOT.'produits/detail/1'?>" class="py-2 d-block">Fruit et légumes</a></li>
                <li><a href="<?=WEBROOT.'produits/detail/2'?>" class="py-2 d-block">Produits Laitiers</a></li>
                <li><a href="<?=WEBROOT.'produits/detail/3'?>" class="py-2 d-block">Viande</a></li>
                <li><a href="<?=WEBROOT.'produits/detail/4'?>" class="py-2 d-block">Pains</a></li>
                <li><a href="<?=WEBROOT.'produits/detail/5'?>" class="py-2 d-block">Boissons</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Une question ?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-phone"></span><span class="text">02 43 00 00 00</span></a></li>
                  <li><span class="icon icon-envelope"></span><span class="text">BMDDrive@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tout droit réservé | BMD Drive
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?= SCRIPT ?>jquery.min.js"></script>
  <script src="<?= SCRIPT ?>jquery-migrate-3.0.1.min.js"></script>
  <script src="<?= SCRIPT ?>popper.min.js"></script>
  <script src="<?= SCRIPT ?>bootstrap.min.js"></script>
  <script src="<?= SCRIPT ?>jquery.easing.1.3.js"></script>
  <script src="<?= SCRIPT ?>jquery.waypoints.min.js"></script>
  <script src="<?= SCRIPT ?>jquery.stellar.min.js"></script>
  <script src="<?= SCRIPT ?>owl.carousel.min.js"></script>
  <script src="<?= SCRIPT ?>jquery.magnific-popup.min.js"></script>
  <script src="<?= SCRIPT ?>aos.js"></script>
  <script src="<?= SCRIPT ?>jquery.animateNumber.min.js"></script>
  <script src="<?= SCRIPT ?>bootstrap-datepicker.js"></script>
  <script src="<?= SCRIPT ?>scrollax.min.js"></script>
  <script src="asset/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?= SCRIPT ?>google-map.js"></script>
  <script src="<?= SCRIPT ?>main.js"></script>
    
  
</html>
