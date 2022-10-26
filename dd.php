<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">       
        <!--Link css-->
        <link rel="stylesheet" href="css/styleprojet.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/dd.css">
        <!--Font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&#038;display=swap" rel="stylesheet" />
	<title>DD</title>
</head>
<body>
   <!-- Start Header -->
    <div class="header" id="header">
        <div class="container">
          <a href="http://ensak.usms.ac.ma/ensak/" class="logo">ENSA KHOURIBGA</a>
          <ul class="main-nav">
            <li><a href="Administrateur.php">Accueill</a></li> 
            <li><a href="informations.php">Des Informations</a></li>
              <?php
           if(empty($_SESSION['user'])){
             echo "<li><a href="."login.php".">Login</a></li>";
           }
           else{
             $res="SELECT * FROM formulaire WHERE Apoge=".$_SESSION['apoge'];
           
            $sql=$con->query($res);

            $n=$sql->rowCount();
             if($n==1){
              echo "<li><a href="."modifier2.php?apoge=".$_SESSION['apoge'].">Modifier Formulaire</a>
                  </li>";
                }
             echo "<li><a href="."logout.php"."><p style='color:#2196f3;font-weight:bold;'>Déconnecter</p></a>
                  </li>";
           } 
            ?>
          </ul>
        </div>
    </div>
       <!-- End Header -->

           <!-- Start Landing -->
    <div class="landing">
      <div class="container">
        <div class="text">
          <h1>WELCOME, TO ENSA KHOURIBGA</h1>
          <p>Plateforme de mobilité internatoinale L’Ecole Nationale des Sciences Appliquées de Khouribga est un établissement public relevait de l’Université Hassan 1er depuis sa création en 2007.</p>
        </div>
        <div class="image">
          <img src="image/ensa-khouribga-1.png" alt="photo" />
        </div>
      </div>
      <a href="#articles" class="go-down">
        <i class="fas fa-angle-double-down fa-2x"></i>
      </a>
    </div>
    <!-- End Landing -->
    <section class="container">
    	<h1 class="titre">Qu'est-ce qu'un double diplôme ?</h1>
    	Les doubles-diplômes sont de plus en plus prisés par les étudiants français : ils permettent aux étudiants de préparer deux diplômes, par exemple, un au sein d’une école de commerce et un au sein d’une université partenaire, ou encore d’une école d’ingénieur. En une seule année, l’étudiant pourra ainsi prétendre à un diplôme de son école d’origine et obtenir un diplôme d’un autre établissement français ou étranger.

         Quel est l’intérêt de faire un double diplôme ?  A la sortie de ses études, le diplômé a ainsi acquis des connaissances et des compétences dans deux domaines d’expertise différents, ce qui peut constituer un véritable atout pour le futur.
             <h3>Voici les partenaires d'ENSA KHOURIBGA en DD:</h3>
    </section>
     <div class="features" id="features">
      <div class="container">
        <div class="box quality">
          <div class="img-holder"><img src="image/douple.jpg" alt="" /></div>
          <h2>INSA Centre Val De Loire </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit harum hic veniam eligendi minima</p>
          <a href="https://www.insa-centrevaldeloire.fr/fr/formation/doubles-diplomes">More</a>
        </div>
        <div class="box time">
          <div class="img-holder"><img src="image/echange.jpg" alt="" /></div>
          <h2>EIL Côte d’Opale </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit harum hic veniam eligendi minima</p>
          <a href="https://www.eilco-ulco.fr/relation-internationales/etudier-a-leil-cote-dopale/">More</a>
        </div>
        </div>
      </div>
    </div>


    <!-- Start Footer -->
    <div class="footer">
      <div class="container">
        <div class="box">
          <h3>ENSA KHOURIBGA</h3>
          <ul class="social">
            <li>
              <a href="#" class="facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="#" class="twitter">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="#" class="youtube">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
          </ul>
          <p class="text" style="text-align: justify;">
            L’ENSA dispense en formation initiale un enseignement supérieur destiné à former, principalement, des ingénieurs d’état hautement qualifiés d’un point de vue scientifique et technique et ce dans différentes spécialités.
          </p>
        </div>
        <div class="box">
          <ul class="links">
            <li><a href="#">CONTACT</a></li>
            <li><a href="#">NOS PROFESSEURS</a></li>
            <li><a href="#">DÉPARTEMENTS</a></li>
            <li><a href="#">LABORATOIRES</a></li>
            <li><a href="#">COURS</a></li>
          </ul>
        </div>
        <div class="box">
          <div class="line">
            <i class="fas fa-map-marker-alt fa-fw"></i>
            <div class="info" >Ecole Nationale des Sciences Appliquées Bd Béni Amir, BP 77
                  Khouribga - Maroc.</div>
          </div>
          <div class="line">
            <i class="far fa-clock fa-fw"></i>
            <div class="info">Business Hours: From 10:00 To 16:00</div>
          </div>
          <div class="line">
            <i class="fas fa-phone-volume fa-fw"></i>
            <div class="info">
              <span>+212523492335 </span>
              <span>+212618534372</span>
            </div>
          </div>
        </div>
    </div>
</body>
</html>