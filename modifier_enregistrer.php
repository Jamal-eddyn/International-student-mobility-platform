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
$sql = "UPDATE formulaire SET 
Nom='$nom',
Prenom='$prenom',
Email='$email',
Telephone=$tel,
Adresse='$adresse',
Filiere='$filiere',
CNE='$CNE',
Ecole='$choix',
mobilite='$choix2',
Dossier_descriptive='$lien_dossier' 
WHERE Apoge=$apoge"; 
$res = $con->exec($sql); 
header("location:Acceuil.php") ;

} 
else{
	echo 'erreur a envoyer';
}
?>