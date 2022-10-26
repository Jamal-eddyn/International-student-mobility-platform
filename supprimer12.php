<?php
include("connect.php");
$apoge=$_GET['apoge'];
$sql = "DELETE FROM formulaire WHERE Apoge =".$apoge; 
$res = $con->query($sql); 
header("location:liste-candidats.php");
  ?>	