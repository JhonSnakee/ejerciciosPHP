<?php
/*3. Se trata de escribir el algoritmo que permita emitir la factura correspondiente a una compra de un artículo determinado, del que se adquieren una o varias unidades. El IVA es del 19% y si el precio bruto ( precio venta mas IVA) es mayor de $13000 se debe realizar un descuento del 5%.
*/
$valor = $_POST['valor'];
$IVA = ($valor*19)/100;
$PB = $valor + $IVA;
$descuento = 0;
$Total = 0;

if ($PB > 13000) {
	$descuento = ($PB*5)/100;
	$Total = $PB - $descuento;
	print ('EL Total con "IVA" y "Descuento" es: '.$Total);
}
else {
	$Total = $PB;
	print ('EL Total con "IVA" es: '.$Total);
}
?>