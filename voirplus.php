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
        <link rel="stylesheet" href="css/events.css" type="text/css">
            <!--Font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&#038;display=swap" rel="stylesheet" /> 
        
</head>
<body>
 
          
   <section class="container">
        <div class="events">
            <ul>
                <?php
                     
                     $res="SELECT * FROM articles ORDER BY id DESC" ;
                     $contenu=$con->query($res); 
                     while($ligne=$contenu->fetch(PDO::FETCH_NUM)){
                 ?>
                <li>
                    <div class="time">
                        <h2>
                             <span><?php echo $ligne[3];?></span>
                        </h2>
                    </div>
                    <div class="details">
                        <h3>
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
                        </h3>
                        <p> 
                            <?php
                           if(strlen($ligne[2])<100)
                            echo $ligne[2];
                          else{

                            $ch=substr($ligne[2],0,150);
                            $ch.="...";
                            echo $ch;
                          }
                          ?>
                        </p>
   
                

                       
                    </div>
               
                    <div></div>
                </li>

                <?php }?>
                 
            </ul>
        </div>

    </section>