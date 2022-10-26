<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
      	<meta charset="utf-8">
      	<title>Accueill</title>
	      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styleprojet.css" type="text/css">
        <link rel="stylesheet" href="css/event.css" type="text/css">
        <link rel="stylesheet" href="css/redaction.css" type="text/css">
        <!--Font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&#038;display=swap" rel="stylesheet" /> 
        
</head>
<body>
 <!-- Start Header -->
    <div class="header" id="header">
        <div class="container">
          <a href="http://ensak.usms.ac.ma/ensak/" class="logo">ENSA KHOURIBGA</a>
          <ul class="main-nav">
            <li><a href="Acceuil.php
            	">Accueill</a></li>
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
        <div class="events">
          <h2>Actualités</h2>
            <ul>
                <?php
                     $cmpt=0;
                     $res="SELECT * FROM articles ORDER BY id DESC" ;
                     $contenu=$con->query($res); 
                     while(($ligne=$contenu->fetch(PDO::FETCH_NUM))&&$cmpt<=3){
                ?>
                <li>
                    <div class="time">
                        <h2>
                             <span><?php echo $ligne[3];?></span>
                        </h2>
                    </div>
                    <div class="details">
                        <h3>
                           

                        <?php
                            if(!empty($ligne[4])){
                               if(empty($_SESSION['user'])){
                              echo '<a href="login.php" style="color:black;">'?><?php echo $ligne[1];?><?php echo'</a>';
                              }
                              else{?>
                                     <a href="<?php echo'formulaire.php?id='.$ligne[0]; ?>"style="color:black;" ><?php echo $ligne[1];?></a>
                             <?php }
                            }
                            else{?>
                              <a href="<?php echo'article.php?id='.$ligne[0]; ?>"style="color:black;" ><?php echo $ligne[1];?></a>
                           <?php }?>
              


                        </h3>
                        <p> 
                          <?php
                         if(strlen($ligne[2])<150)
                            echo $ligne[2];
                          else{

                            $ch=substr($ligne[2],0,150);
                            $ch.="...";
                            echo $ch;
                          }


                          ?>
                        </p>
   
                        
                    </div>
               
                    
                </li>

                <?php $cmpt++;}?>
                <?php if($cmpt>=4){?>
                 <button class="botn"><span><a href="voirplus.php">Voir Plus</a></span></button>
                <?php }?>
            </ul>
        </div>

    </section>
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