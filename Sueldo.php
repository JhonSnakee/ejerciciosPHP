<?php
/*4. A un trabajador le descuentan de su sueldo el 10% si su sueldo es menor o igual a 1000, por encima de 1000 y hasta 2000 el 5% del adicional, y por encima de 2000 el 3% del adicional. Calcular el descuento y sueldo neto que recibe el trabajador dado su sueldo.
*/

$sueldo = $_POST['Sueldo'];
$neto = 0;

if ($sueldo <= 1000) {
	$desc10 = (10*$sueldo)/100;
	$neto = $sueldo - $desc10;
}
elseif (($sueldo > 1000)&&($sueldo <= 2000)) {
	$desc5 = (5*$sueldo)/100;
	$neto = $sueldo - $desc5;
}
elseif ($sueldo > 2000) {
	$desc3 = (3*$sueldo)/100;
	$neto = $sueldo - $desc3;
}
echo "Su sueldo es de: ".$neto;
?>