<?php
include("T5conexion.php");

$con =  mysqli_connect($host,$user,$pw) or die ("Problemas al conectar al servidor");
mysqli_select_db($con,$db) or die ("Problemas al conectar con db");
mysqli_query($con,"UPDATE alumno set nombre='$_POST[nuevo]' where nombre='$_POST[viejo]'") or die (mysqli_error());
echo "Actualizacion correcta";
?>