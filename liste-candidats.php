<?php
include("connect.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>espace-administrateur</title>
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
    <div class="redaction">
      <h1>Recherche</h1><br>
      <form method="POST" action="liste-candidats.php">
    
        <label for="t">Mobilite:</label><br><input type="text" id="t" name="mobilite" placeholder="La mobilite"><br>
  
        <label for="d">Ecole:</label><br><input type="text" id="d" name="ecole" placeholder="L'ecole"><br>
        <label for="e">Filiere:</label><br><input type="text" id="e" name="filiere" placeholder="La filiere"><br>
        <button class="botn" type="submit" value="Envoyer"><span>Envoyer</span></button>
      </form>
    </div>
    <div class="list">
      <table>  
        <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>EMAIL</th>
        <th>TELEPHONE</th>
        <th>ADRESSE</th>
        <th>FILIERE</th>
        <th>APOGE</th>
        <th>CNE</th>
        <th>ECOLE</th>
        <th>LA MOBILITE</th>
        <th>DOSSIER-DESCRIPTIVE</th>
        <th>Modifier</th>
        <th>Supprimer</th>
        
        </tr>
        <?php
        if(!empty($_POST['ecole']) && !empty($_POST['mobilite'])&& !empty($_POST['filiere'])){
          if(isset($_POST['ecole']) && isset($_POST['mobilite'])&& isset($_POST['filiere'])){
          $mobilite = htmlentities($_POST['mobilite']); 
          $ecole = htmlentities($_POST['ecole']); 
          $filiere=htmlentities($_POST['filiere']);
         
          $req="SELECT * FROM formulaire WHERE Filiere='$filiere' AND Ecole='$ecole' AND mobilite='$mobilite'";
         }
       }
            else{
              $req="SELECT * FROM formulaire";
            }

               $res=$con->query($req) ;
                         
               $u="telecharger.csv";
               $fh=fopen($u, "w");
               $chaine=";"."Nom";
               $chaine.=";"."Prenom";
               $chaine.=";"."Email";
               $chaine.=";"."Telephone";
               $chaine.=";"."Adresse";
               $chaine.=";"."Filier";
               $chaine.=";"."Apoge";
               $chaine.=";"."CNE";
               $chaine.=";"."Ecole";
               $chaine.=";"."Mobilite";
               $chaine.=";"."Dossier_Description";
         fwrite($fh,"$chaine"."\r\n");
          
         while($ligne=$res->fetch(PDO::FETCH_NUM )){ ?>    
        <tr>
        <td ><?php echo $ligne[0]; ?></td>
        <td ><?php echo $ligne[1]; ?></td>
        <td ><?php echo $ligne[2]; ?></td>
        <td ><?php echo $ligne[3]; ?></td>
        <td ><?php echo $ligne[4]; ?></td>
        <td ><?php echo $ligne[5]; ?></td>
        <td ><?php echo $ligne[6]; ?></td>
        <td ><?php echo $ligne[7]; ?></td>
        <td ><?php echo $ligne[8]; ?></td>
        <td ><?php echo $ligne[9]; ?></td>
        <td><button class="botn"><a href="<?php echo $ligne[10] ; ?>"><span>Télécharger</span></a></button></td>
         <td><a href="<?php echo 'modifier.php?apoge='.$ligne[6]; ?>"><i class="fas fa-cloud-meatball">Modification</i></a></td>
        <td><a href="<?php echo 'supprimer12.php?apoge='.$ligne[6]; ?>"><i class="fas fa-trash">Suppression</i></a></td>
        </tr>
        <?php 
        
         $chaine=";".$ligne[0];
         $chaine.=";".$ligne[1];
         $chaine.=";".$ligne[2];
         $chaine.=";".$ligne[3];
         $chaine.=";".$ligne[4];
         $chaine.=";".$ligne[5];
         $chaine.=";".$ligne[6];
         $chaine.=";".$ligne[7];
         $chaine.=";".$ligne[8];
         $chaine.=";".$ligne[9];
         $chaine.=";"."https://localhost/Projet-Web/Dossiers".$ligne[10];
         fwrite($fh,"$chaine"."\r\n");

      }
         
         
         fclose($fh);
        ?>
      </table>
        <button class="botn" type="submit" value="Envoyer"><a href="formulaire2.php"><span >Ajouter</span></a></button>
        <button class="botn" type="submit" value="Envoyer"><a href="telecharger.csv"><span >Fichier execel </span></a></button>
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