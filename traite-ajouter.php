<?php
include ("connect.php"); 
if(isset($_POST['nom']) && isset($_POST['prenom'])&& isset($_POST['CNE'])&& isset($_POST['CNI'])&& isset($_POST['date'])&&isset($_POST['apoge'])&&isset($_POST['filier'])) 
{ 
$nom = htmlentities($_POST['nom']); 
$prenom = htmlentities($_POST['prenom']); 
$CNE=htmlentities($_POST['CNE']); 
$CNI= htmlentities($_POST['CNI']);
$date = htmlentities($_POST['date']); 
$apoge = htmlentities($_POST['apoge']); 
$filier=htmlentities($_POST['filier']); 
$sql = "INSERT INTO etudiant_cons VALUES('$nom','$prenom','$CNE','$CNI','$apoge','$date','$filier')"; 
echo $sql;
$res = $con->query($sql);  

//echo "Nb de lignes affectés : " . $res; 
header("location:http://localhost/Projet-Web/etudiant-cons.php");
} 


?>