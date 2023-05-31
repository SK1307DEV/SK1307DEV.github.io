<?php

include("conexion.php");

$nombre = $_POST["nombre"];
$user = $_POST["usuario"];
$pass   = $_POST["password"];
$correo = $_POST["correo"];



//Registrar
if(isset($_POST["btnregistrar"]))
{
	$sqlgrabar = "INSERT INTO datos(Nombre,Usuario,Correo,Password) values ('$nombre','$user','$correo','$pass')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='login.html' </script>";
	}else 
	{
		echo "Error: ".$sqlgrabar."<br>".mysqli_error($conn);
	}
}


?>