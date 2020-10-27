<?php
	$con=mysqli_connect('127.0.0.1','root',"","project");
	mysqli_query($con, "INSERT INTO magazine (zagolovok, opisanie, tsena, img) VALUES ('".$_GET['zagolovok']."','".$_GET['opisanie']."','".$_GET['tsena']."', '".$_GET['img']."' )");

	header('location:admin.php');
 ?>