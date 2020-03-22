<?php
/* 1. Desarrolle un algoritmo que permita leer tres valores y almacenarlos en las variables A, B y C respectivamente. El algoritmo debe imprimir cual es el mayor y cual es el menor. Recuerde constatar que los tres valores introducidos por el teclado sean valores distintos. Presente un mensaje de alerta en caso de que se detecte la introducción de valores iguales.
*/
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$numero3 = $_POST['numero3'];

If (($numero1 > $numero2)&&($numero1 > $numero3)){
	echo "El mayor es : ".$numero1;
}
elseif (($numero2 > $numero3)&&($numero2 > $numero1)) {
	echo "El mayor es: ".$numero2;
}
elseif (($numero3 > $numero1)&&($numero3 > $numero2)) {
	echo "El mayor es: ".$numero3;
}
elseif (($numero1 = $numero2)&&($numero2 = $numero3)) {
	echo "Todos los numeros son iguales: ".$numero1;
}
else{
	echo "Debes insertar todos los campos";
}
?>