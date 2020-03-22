<?php
include("T1conexion.php");
if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['pw']) && !empty($_POST['pw'])){
	$con = mysqli_connect($host,$user,$pw) or die ("Problemas al conectar");
	mysqli_select_db($con,$db) or die ("Problemas al conectar la bd");
	mysqli_query($con,"INSERT INTO alumno(NOMBRE,PW) VALUES ('$_POST[nombre]','$_POST[pw]')"); //va el nombre de la tabla
	echo "Datos insertados";
}else{
	echo "Problemas al insertar datos *****************";
}

?>