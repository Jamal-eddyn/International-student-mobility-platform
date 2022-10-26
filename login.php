<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign in & Sign up Form</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/logincss.css" />
    <!--Link css-->
    <link rel="stylesheet" href="css/styleprojet.css" type="text/css">
    <link rel="stylesheet" href="css/logincss.css" />
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&#038;display=swap" rel="stylesheet" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- Start Header -->
    <div class="header" id="header">
        <div class="container">
          <a href="http://ensak.usms.ac.ma/ensak/" class="logo">ENSA KHOURIBGA</a>
          <ul class="main-nav">
            <li><a href="Acceuil.php">Accueill</a></li>
            <li> <a href="informations.php">DES Informations</a></li>
            
          </ul>
        </div>
    </div>
       <!-- End Header -->
    <div class="container1">
      <div class="forms-container1">
        <div class="signin-signup">
          <?php
          $message="";
          $message2="";
           $message3="";
          if(isset($_GET["message"]))
            $message=$_GET["message"];
          if(isset($_GET["message2"]))
            $message2=$_GET["message2"];
          if(isset($_GET["message3"]))
            $message3=$_GET["message3"];
          ?>
          <form action="login-sign-in.php" class="sign-in-form" method="POST">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username"  name="nom"  required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="passwd" required/><br><br>
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <?php
            if(!empty($message)&&$message=="invalid1"){
              echo "<span style='color:blue;font-weight:bold'>Password Incorrect</span>";
            }
               if(!empty($message2)&&$message2=="invalid"){
              echo "<span style='color:blue;font-weight:bold'>Username n'existe pas</span>";
            }
            ?>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>

          <form action="login-sign-up-form.php" class="sign-up-form" method="POST">
          <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="nom"required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" placeholder="apoge" name="apoge"required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="passwd"required />
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <?php
            if(!empty($message3)&&$message3=="invalid3"){
              echo "<span style='color:blue;font-weight:bold'>Username deja existe ou ce Apoge n'est pas concerner par la mobilite ou ce Apoge deja exite</span>";
            }
            ?>
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container1">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
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
     <p class="copyright">Made With &lt;GOUAICHE OUSSAMA AND AIMANE JAMAL-EDDYN&gt;</p>
    <!-- End Footer -->
    <script src="java/app.js"></script>
  </body>
</html>