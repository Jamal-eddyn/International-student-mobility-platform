<?php
include ("connect.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['nom'])&&isset($_POST['apoge'])&&isset($_POST['passwd'])){
	if(!empty($_POST['nom'])&&!empty($_POST['apoge'])&&!empty($_POST['passwd'])){
	$nom=htmlentities(trim($_POST['nom']));
	$hash=htmlentities($_POST['passwd']);
	$passwd=password_hash($hash, PASSWORD_DEFAULT);
	$apoge=htmlentities(trim($_POST['apoge']));
	$res="SELECT * FROM users WHERE Username='".$nom."'";
	$cont="SELECT * FROM etudiant_cons WHERE APOGE='".$apoge."'";
	$contenu="SELECT * FROM users WHERE Apoge='".$apoge."'";
	$resq=$con->query($res) ;
	$sql=$con->query($cont);
	$cnt=$con->query($contenu);
	$num=$resq->rowCount();
	$ligne=$sql->rowCount();
    $ligne2=$cnt->rowCount();
	if($num==1||$ligne==0||$ligne2==1){
     header("location:login.php?message3=invalid3");
	}
	else{
	$insertion= $con->prepare('INSERT INTO users(Username,Password,Apoge) VALUES(?,?,?)');
		$insertion->execute(array($nom,$passwd,$apoge));
		session_start();
		$_SESSION['user']=$nom;
		$_SESSION['apoge']=$apoge;
		header("location:Acceuil.php");
	}
		 	
}
}
}
?>
