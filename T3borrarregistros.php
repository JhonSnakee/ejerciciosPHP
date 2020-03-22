<?php
include("T3conexion.php");
$con =  mysqli_connect($host,$user,$pw) or die ("Problemas en server");
mysqli_select_db($con,$db) or die ("Problemas en db");
$reg = mysqli_query($con,"SELECT IDALUMNO FROM alumno WHERE NOMBRE ='$_POST[nombre]'")
or die (mysqli_error($con));

if($reg=mysqli_fetch_array($reg)){
	mysqli_query($con,"DELETE FROM alumno WHERE NOMBRE = '$_POST[nombre]'");
	echo "datos eliminados";
}else{
	echo "datos NO eliminados";
}
?>