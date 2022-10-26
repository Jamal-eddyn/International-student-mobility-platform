<?php
$dsn='mysql:host=localhost;dbname=mobilite';
$user='root';
$pass='aymane2021';

try{
	$con=new PDO($dsn,$user,$pass);
	//echo "bien connecté";
}
catch(Exception $e){
	echo 'Erreur de connexion'.$e->getMessage();
}

?>