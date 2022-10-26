<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulaire</title>
    <link rel="stylesheet" href="css/styleprojet.css" type="text/css">
    <link rel="stylesheet" href="css/forme.css" />
    <link rel="stylesheet" href="css/heaader.css" />
    <link rel="stylesheet" href="css/redaction2.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    
  </head>
  <body>
    <div class="header" id="header">
        <div class="container1">
          <a href="http://ensak.usms.ac.ma/ensak/" class="logo" style="text-decoration: none;">ENSA KHOURIBGA</a>
          <ul class="main-nav">
            <li><a href="Acceuil.php
              "style="text-decoration: none;">Accueill</a></li>
            <li><a href="informations.php"style="text-decoration: none;">Des Informations</a></li>
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
    <?php
          $res="SELECT * FROM articles ORDER BY id DESC" ;
          $contenu=$con->query($res); 
          $id=$_GET['id']; 
          while($ligne=$contenu->fetch(PDO::FETCH_NUM)){
          if($id==$ligne[0])
          {
          ?>
           <section class="container">
                 <h1> <?php echo $ligne[1];?></h1>
                 <p> <?php echo $ligne[2];?></p>
                  <?php
                   if($ligne[5]!="vide")
                   {?>
                    <button class="botn"><a href="<?php echo $ligne[5] ; ?>"><span>Télécharger</span></a></button>
                  <?php }?>
                  
            </section>
<?php }}?>
 <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-9">
            <h1 class="title">Inscription</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>ENSA Khouribga</h2>
            <p>le futur est proche</p>

        </div>
    </div>

    <form class="form-horizontal" role="form" action="traiter-formulaire.php" method="POST" enctype="multipart/form-data">
        <div class='container'>

            <div class='row'>
                <div class="col-lg-12">
                    <div class="form-heading">
                        <span class="prg">Information Personnel</span>
                    </div>
                </div>
            </div>
            <div class='row'>

                
                    <!--<form class="form-horizontal" role="form">-->
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Nom :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nom" id="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="prenom" class="col-sm-2 control-label">Prenom :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="prenom" id="prenom" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mail" class="col-sm-2 control-label">Email :</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tel" class="col-sm-2 control-label">T&eacute;l&eacute;phone :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="tel" id="tel" required>
                        </div>
                    </div>
                

                    <div class="form-group">

                        <label for="adresse" class="col-sm-2 control-label">Adresse</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="adresse" id="adresse" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cp" class="col-sm-2 control-label">La filiere</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="filiere" id="cp">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ville" class="col-sm-2 control-label">Apoge</label>
                        <div class="col-sm-8">
                            <input type="text" name="apoge" class="form-control" id="ville" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pays" class="col-sm-2 control-label">CNE</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="CNE" id="pays" required>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">

                    <div class="form-heading">

                        <span class="prg">Les choix:faire attention</span>
                    </div>

                    <div>

                        <div class="form-group">
                            <label for="programme" class="col-sm-2 control-label">choisir l'ecole</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="choix">
                                    <option>EIL Cote Opale </option>
                                    <option> INSA DE Toulouse </option>
                                    <option> POLYTECH Angers</option>
                                    <option> INSA Centre Val De Loire </option>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="origine" class="col-sm-2 control-label">la mobilité</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="choix2">
                                  <option>Double diplomation</option>
                                    <option>Echange</option>
                                    <option>PFE</option>
                                    <option>suivi de semestres enseignement</option>
                                </select>
                            </div>
                        </div>
                        <!--</form>-->

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="form-heading">

                        <span class="prg">Importer vos fichiers</span>
                    </div>

                    
                    <div class="form-group">
                        <label for="nam" class="col-sm-2 control-label">Dossier Descriptive :</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="dossier" id="nam" required>
                        </div>
                    </div>
                    <br>
                

            </div>
            <div class="col-xs-12">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </div>
    </form>

</div>
</body>
</html>