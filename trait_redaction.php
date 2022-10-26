<?php
include ("connect.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['titre'])&&isset($_POST['contenu'])){
	if(!empty($_POST['titre'])&&!empty($_POST['contenu'])){
	$titre=htmlentities(trim($_POST['titre']));
	$contenu=htmlentities($_POST['contenu']);
	$forma=$_POST['forma'];
	
	if(isset($_FILES["resultat"])&&$_FILES["resultat"]["error"]==0){
     move_uploaded_file($_FILES["resultat"]["tmp_name"], 'resultats/'.time().$_FILES["resultat"]["name"]);
     $lien_resultat='resultats/'.time().$_FILES["resultat"]["name"];
     
	$sql= "INSERT INTO articles VALUES(NULL,'$titre','$contenu',NOW(),'$forma[0]','$lien_resultat')";
	
	}
    else{
	$sql= "INSERT INTO articles VALUES(NULL,'$titre','$contenu',NOW(),'$forma[0]','vide')";
	
}
	$res=$con->exec($sql);
	var_dump($res);
header("location:manipuler_article.php");	
}

	
else{
	header("location:redaction.php?message=invalid");
}		 	
}
}
?>