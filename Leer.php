<?php
$archivo=fopen("archivo.txt", "r")
or die("Problemas al abrir archivo.txt");
while (!feof($archivo)) {
	$traer=fgets($archivo);
	$saltodelinea=nl2br($traer);
	echo $saltodelinea;
}
?>