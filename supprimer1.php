<?php
$dns = 'mysql:host=localhost; dbname=mobilite'; 
$user = 'root'; 
$password = 'aymane2021'; 
try
{ 
$id=$_GET['apoge'];
$my_con = new PDO($dns, $user, $password); 
$sql = "DELETE FROM etudiant_cons WHERE APOGE =".$id; 
$res = $my_con->exec($sql); 
echo "Nb de lignes affectés : " . $res; 
header("location:etudiant-cons.php");
} 
catch(PDOException $excep) 
{ 
echo "Erreur : " . $excep->getMessage(); 
} 
?>