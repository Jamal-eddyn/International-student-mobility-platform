<?php
include("connect.php");
$id=$_GET['id'];
$sql = "DELETE FROM articles WHERE ID =".$id; 
$res = $con->query($sql); 
header("location:manipuler_article.php");
  ?>	