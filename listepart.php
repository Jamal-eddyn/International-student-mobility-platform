<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
      <title>liste partenaire</title>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="css/csslistpart.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="css/styleprojet.css" type="text/css">
      <link rel="stylesheet" href="css/event.css" type="text/css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <!--Font-->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&#038;display=swap" rel="stylesheet" />

</head>


<body>
<div class="header" id="header">
        <div class="container">
          <a href="http://ensak.usms.ac.ma/ensak/" class="logo">ENSA KHOURIBGA</a>
          <ul class="main-nav">
            <li><a href="administrateur.php">Acceuill</a></li>
            
             
          <?php
           if(empty($_SESSION['user'])){
             echo "<li><a href="."login-adm.php".">Login</a></li>";
           }
           else{
            echo'<li><a href="redaction.php">publication</a></li>';
             echo ' <li>
            <a href="#">Other Links</a>
            <!-- Start Megamenu -->
            <div class="mega-menu">
              <div class="image">
                <img src="imgs/megamenu.png" alt="" />
              </div>
              <ul class="links">
                <li>
                  <a href="listepart.php"><i class="far fa-comments fa-fw"></i> Liste des partenaires actuels</a>
                </li>
                <li>
                  <a href="etudiant-cons.php"><i class="far fa-user fa-fw"></i> Liste des étudiants concerneé</a>
                </li>
                <li>
                  <a href="liste-candidats.php"><i class="far fa-user fa-fw"></i> Liste des candidats</a>
                </li>
              </ul>
            </div>
            <!-- End Megamenu -->
          </li>';
             echo "<li><a href="."logout-adm.php"."><p style='color:#2196f3;font-weight:bold;'>Déconnecter</p></a></li>";
           } 
            ?>
          </ul>
        </div>
    </div>
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


<table border="1">
  <caption>Double Diplomation</caption>
  <tr>
    <th>Les partenaires</th>
    <th>Fichiers descriptives</th>
    <th>Modalité</th>
    <th>Procédure</th>
    <th>calendriers</th>

  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
    <td>$100</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
    <td>$150</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Joe</td>
    <td>Swanson</td>
    <td>$300</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Cleveland</td>
    <td>Brown</td>
    <td>$250</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
</table>

<table border="1">
  <caption>PFE</caption>
  <tr>
    <th>Les partenaires</th>
    <th>Fichiers descriptives</th>
    <th>Modalité</th>
    <th>Procédure</th>
    <th>calendriers</th>

  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
    <td>$100</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
    <td>$150</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Joe</td>
    <td>Swanson</td>
    <td>$300</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Cleveland</td>
    <td>Brown</td>
    <td>$250</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
</table>

<table border="1">
  <caption>Suivie Semestre</caption>
  <tr>
    <th>Les partenaires</th>
    <th>Fichiers descriptives</th>
    <th>Modalité</th>
    <th>Procédure</th>
    <th>calendriers</th>

  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
    <td>$100</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
    <td>$150</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Joe</td>
    <td>Swanson</td>
    <td>$300</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Cleveland</td>
    <td>Brown</td>
    <td>$250</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
</table>

<table border="1">
  <caption>Echange</caption>
  <tr>
    <th>Les partenaires</th>
    <th>Fichiers descriptives</th>
    <th>Modalité</th>
    <th>Procédure</th>
    <th>calendriers</th>

  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
    <td>$100</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
    <td>$150</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Joe</td>
    <td>Swanson</td>
    <td>$300</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Cleveland</td>
    <td>Brown</td>
    <td>$250</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
</table>



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
     <p class="copyright">Made With &lt;GOUAICHE OUSSAMA AND AIMANE JAMAL-EDDYN&gt;</p>
    <!-- End Footer -->
</body>
</html>