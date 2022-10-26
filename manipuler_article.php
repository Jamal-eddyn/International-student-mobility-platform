<?php
include("connect.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Article</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css/csslistpart.css">
  <link rel="stylesheet" href="css/styleprojet.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/dd.css">
  <link rel="stylesheet" type="text/css" href="css/redaction.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> 

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
    <div class="list">
      <table border="1">  
        <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Contenu</th>
        <th>Date_de_publication</th>
        <th>Supression</th>
        <?php
          
     
              $req="SELECT * FROM articles";
            
               $res=$con->query($req) ;
               
         while($ligne=$res->fetch(PDO::FETCH_NUM )){
        

                    $ch=substr($ligne[1],0,40);
                    $ch.="...";
                    $ch2=substr($ligne[2],0,150);
                    $ch2.="...";
                      
          ?>    

        <tr>
        <td ><?php echo $ligne[0]; ?></td>
        <td ><?php if(strlen($ligne[1])<40) echo $ligne[1]; else echo $ch ?></td>
        <td ><?php if(strlen($ligne[2])<150) echo $ligne[2]; else echo $ch2?></td>
        <td ><?php echo $ligne[3]; ?></td>
        <td><a href="<?php echo 'suppriimer_article.php?id='.$ligne[0]; ?>"><i class="fas fa-trash">Suppression</i></a></td>
        </tr>
        <?php } ?>
        </table>
         <a href="redaction.php" class="main-title" style="align:center">Ajouter Etudiant</a>
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
     <p class="copyright">Made With &lt;GOUAICHE OUSSAMA AND AIMANE JAMAL-EDDYN&gt;</p>
    <!-- End Footer -->
   
</body>
</html>