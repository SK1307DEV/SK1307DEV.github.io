<?php
$dbhost = "localhost";
$dbuser = "id20577169_fox";
$dbpass = "Zulu@2017";
$dbname = "id20577169_databasefox";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn)
{
	die("No hay conexion:" .mysqli_connect_error());
}
?>