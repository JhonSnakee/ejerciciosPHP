<?php
include("T2conexionyedicionregistro.php");

$con = mysqli_connect($host,$user,$pw) or die ("Problemas al conectar db");

mysqli_select_db($con,$db) or die ("Problemas al conectar db");

//codigo original

//$registro=mysql_query("SELECT * FROM codigof");
$registro = mysqli_query($con, "SELECT * FROM alumno WHERE NOMBRE='$_POST[nombre]'") or die ("Problemas en consulta:".mysqli_error($db));

while($reg=mysqli_fetch_array($registro)){
	/* Ejemplo inicial
		echo "<center>";
		echo $reg['nombre']."<br>";
		echo $reg['pw']."<br>";
		echo "</center>";
	*/
	//esta es la parte nueva para solo el dato
	echo "<center>";
	echo $reg['nombre']."<br>";
	echo $reg['pw']."<br>";
	echo "</center>";
}
?>