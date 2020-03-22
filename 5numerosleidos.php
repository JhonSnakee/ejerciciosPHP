<?php
/*Desarrolle un algoritmo que le permita determinar de una lista de 5 números leídos en pantalla
¿Cuántos están entre el 50 y 75, ambos inclusive?
¿Cuántos mayores de 80?
¿Cuántos menores de 30?
*/
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$numero3 = $_POST['numero3'];
$numero4 = $_POST['numero4'];
$numero5 = $_POST['numero5'];
//contadores
$cont5075 = 0;
$cont80 = 0;
$cont30 = 0;
//cargo array
$array = array($numero1,$numero2,$numero3,$numero4,$numero5);
//saco el numero de elementos
$cantidad = count($array);
//numeros que están entre el 50 y 75
for ($i=0; $i < $cantidad; $i++) { 
	if (($array[$i] >= 50)&&($array[$i] <= 75)) {
		$cont5075 = $cont5075 + 1;
	}
	if ($array[$i] > 80) {
		$cont80 = $cont80 + 1;
	}
	if ($array[$i] < 30) {
		$cont30 = $cont30 + 1;
	}	
}
echo'<br>';
print('Hay '.$cont5075.' numeros que están entre el 50 y 75.');
echo'<br>';
print('Hay '.$cont80.' numeros mayores de 80.');
echo'<br>';
print('Hay '.$cont30.' numeros menores de 30.');
?>