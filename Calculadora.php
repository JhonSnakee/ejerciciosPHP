<?php

$operacion = $_POST['lista'];

if(isset($_POST['C1']) && !empty($_POST['C1']) && isset($_POST['C2']) && !empty($_POST['C2']) && isset($_POST['C3']) && !empty($_POST['C3'])){
	echo "El resultado es: ";
	switch ($operacion) {
		case 'sumar':
			echo $_POST['C1'] + $_POST['C2'] + $_POST['C3'];	
		break;
		
		case 'restar':
			echo $_POST['C1'] - $_POST['C2'] - $_POST['C3'];	
		break;

		case 'multiplicar':
			echo $_POST['C1'] * $_POST['C2'] * $_POST['C3'];	
		break;

		case 'dividir':
			echo $_POST['C1'] / $_POST['C2'] / $_POST['C3'];	
		break;

		default: 'No se ha podido realizar la operacion';
	}
}
else {
	echo "debes insertar todos los campos";
}

?>