<?php
include("T4conexion.php");
if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['pw']) && !empty($_POST['pw']) && isset($_POST['pw2']) && !empty($_POST['pw2']) && isset($_POST['email']) && !empty($_POST['email']) && $_POST['pw'] == $_POST['pw2'])
{
	$con =  mysqli_connect($host,$user,$pw) or die ("Problemas al conectar al servidor");
	mysqli_select_db($con,$db) or die ("Problemas al conectar la db");
	mysqli_query($con,"INSERT INTO registro (NOMBRE,USER,PW,EMAIL) VALUES ('$_POST[nombre]','$_POST[user]','$_POST[pw]','$_POST[email]')");
	echo "datos insertados<br/>";

	echo "NOMBRE:".$_POST['nombre']."<br/>";
	echo "USUARIO:".$_POST['user']."<br/>";
	echo "PASSWORD:".$_POST['pw']."<br/>";
	echo "EMAIL:".$_POST['email']."<br/>";
}else{
	echo "Hay campos vacios o la contraseña es incorrecta";
}
?>