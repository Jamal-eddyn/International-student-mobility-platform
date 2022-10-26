<?php
$dns = 'mysql:host=localhost; dbname=mobilite'; 
$user = 'root'; 
$password = 'aymane2021'; 
try   
{ 
$my_con = new PDO($dns, $user, $password); 
if(isset($_POST['nom']) && isset($_POST['prenom'])&& isset($_POST['CNE'])&& isset($_POST['CNI'])&& isset($_POST['date'])&&isset($_POST['apoge'])&&isset($_POST['filier'])) 
{ 
$nom = htmlentities($_POST['nom']); 
$prenom = htmlentities($_POST['prenom']); 
$CNE=htmlentities($_POST['CNE']); 
$CNI= htmlentities($_POST['CNI']);
$date = htmlentities($_POST['date']); 
$apoge = htmlentities($_POST['apoge']); 
$filier=htmlentities($_POST['filier']); 
$sql = "UPDATE etudiant_cons SET 
NOM='$nom',
PRENOM='$prenom',
CNE='$CNE',
CIN='$CNI',
APOGE='$apoge',
NAISSANCE='$date',
FILIERE='$filier'
WHERE APOGE = $apoge"; 
echo $sql;
$res = $my_con->exec($sql);  
echo "Nb de lignes affectés : " . $res; 
header("location:http://localhost/Projet-Web/etudiant-cons.php");
} 
} 
catch(PDOException $excep) 
{ 
echo "Erreur : ".$excep->getMessage(); 
}


?>