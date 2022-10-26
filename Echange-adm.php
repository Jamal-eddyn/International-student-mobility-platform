<?php
session_start();
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
	<title>Echange</title>
</head>
<body>
   <!-- Start Header -->
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
    	<h1 class="titre"> Echange: </h1>
    	Pour marquer les 10 années de coopération entre Istia/Polytech et les Ensa marocaines, une cérémonie a été organisée à Marrakech le 2 mai 2019. Christian Roblédo, président de l’UA, Françoise Grolleau, vice-présidente International de l’UA et Alexis Todoskoff, enseignant-chercheur à Polytech Angers qui pilote les programmes marocains, ont notamment fait le déplacement. La délégation a été accueillie par Abdellatif Miraoui, président de l’Université Cadi Ayyad de Marrakech, en présence de Nabil Hmina, président de l’Université de Sultan Moulay Sliman de Beni Mellal.

      Au cours de cet événement, le président de l’UA et ses homologues des cinq universités dont dépendent les Ensa ont signé l’acte de naissance d’un véritable réseau fédérant les sept écoles. Ce nombre pourrait augmenter si d’autres Ensa ou membres français du réseau Polytech venaient à s’y adjoindre. « C’est une petite révolution, précise Alexis Todoskoff. La formalisation du réseau symbolise notre ambition collective de pouvoir mener des actions de plus grande envergure avec les ministères et les organismes consulaires ».

      Au-delà de la poursuite des programmes de doubles diplômes, les acteurs se sont engagés à renforcer la coopération et les mobilités entre leurs établissements. Les échanges entre enseignants-chercheurs devraient s’intensifier, dans le but d’accroître encore la qualité des formations, et d’explorer des possibilités de collaborations scientifiques. L’insertion professionnelle des diplômés reste une priorité.

      Outre Campus France et la Chambre française de commerce et d’industrie du Maroc, une demi-douzaine d’entreprises (Alstom, Thales, Sogeti…) figurent parmi les partenaires du réseau, afin de garantir un lien fort avec le monde professionnel.

      <h3>Voici les partenaires d'ENSA KHOURIBGA en Echange:</h3>
    </section>
     <div class="features" id="features">
      <div class="container">
        <div class="box quality">
          <div class="img-holder"><img src="image/douple.jpg" alt="" /></div>
          <h2>INSA Centre Val De Loire </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit harum hic veniam eligendi minima</p>
          <a href="https://www.insa-centrevaldeloire.fr/fr/international/etudiants-internationaux-en-echange">More</a>
        </div>
        <div class="box time">
          <div class="img-holder"><img src="image/echange.jpg" alt="" /></div>
          <h2>EIL Côte d’Opale </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit harum hic veniam eligendi minima</p>
          <a href="https://www.eilco-ulco.fr/relation-internationales/etudier-a-leil-cote-dopale/">More</a>
        </div>
        <div class="box passion">
          <div class="img-holder"><img src="image/pfe.jpg" alt="" /></div>
          <h2>INSA DE Toulouse </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit harum hic veniam eligendi minima</p>
          <a href="https://www.toulouse.archi.fr/fr/international/venir-a-lecole/programmes-dechange">More</a>
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