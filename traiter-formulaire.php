<?php 
include ("connect.php");

if(isset($_POST['nom']) && isset($_POST['prenom'])&& isset($_POST['email'])&& isset($_POST['tel'])&& isset($_POST['adresse'])&&isset($_POST['filiere'])&&isset($_POST['apoge'])&&isset($_POST['CNE'])&&isset($_POST['choix'])&&isset($_POST['choix2'])&&isset($_FILES["dossier"])&&$_FILES["dossier"]["error"]==0 ) 
{ 
$nom = htmlentities($_POST['nom']); 
$prenom = htmlentities($_POST['prenom']); 
$email = htmlentities($_POST['email']);
$tel = htmlentities($_POST['tel']);
$adresse = htmlentities($_POST['adresse']);
$filiere= htmlentities($_POST['filiere']); 
$apoge = htmlentities($_POST['apoge']);
$CNE=htmlentities($_POST['CNE']); 
$choix = htmlentities($_POST['choix']); 
$choix2=htmlentities($_POST['choix2']); 
move_uploaded_file($_FILES["dossier"]["tmp_name"], 'Dossiers/'.$apoge.$_FILES["dossier"]["name"]);

$lien_dossier='Dossiers/'.$apoge.$_FILES["dossier"]["name"];
$sql = "INSERT INTO formulaire VALUES('$nom','$prenom','$email','$tel','$adresse','$filiere','$apoge','$CNE','$choix ','$choix2','$lien_dossier')"; 
$res = $con->exec($sql);  
header("location:Acceuil.php");

} 
else{
	echo 'erreur a envoyer';
}
?>