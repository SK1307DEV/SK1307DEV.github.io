<?php

include("conexion.php");

$user = $_POST["usuario"];
$pass   = $_POST["password"];

//Login
if(isset($_POST["btningresar"]))
{
	$query = mysqli_query($conn,"SELECT * FROM datos WHERE Usuario = '$user' AND password='$pass'");
	$nr = mysqli_num_rows($query);
	
	if($nr==1)
	{
		echo "<script> alert('Bienvenido $user'); window.location='login.html' </script>";
	}else
	{
		echo "<script> alert('Usuario no existe'); window.location='login.html' </script>";
	}
}


?>