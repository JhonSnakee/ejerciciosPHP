<?php

// SENTENCIA HECHO
echo 'primer curso de codigo en php<br >';
echo 'materiales y ensayos<br>';
echo 12345;
Print'<br>';
Print '-------------------------------------------------------';
Print'<br>';
// SENTENCIA PRINT
Print 'Hola Mundo';
Print'<br>';
Print '-------------------------------------------------------';
Print'<br>';
// VARIABLES, CONSTANTES Y CONCATENACION

/*
Comentarios en varias lineas que se cierre
*/

//Variables son las que permiten almacenar un valor
$numero = 50;
$texto = '<br> esto es un texto';
$boolean = true;
Print'<br>';
echo $numero;
echo $texto;
echo $boolean;
Print'<br>';
Print'<br>';

// unidad4

// CONSTANTES Y CONCATENACION

define('saludo', '<br> Hola, como estas?<br>');
define('numero', 20);

echo saludo.' Tengo '.numero.' años ';
// la concatenacion es mediante el (.) punto
Print'<br>';
Print '-------------------------------------------------------';
Print'<br>';
// ARREGLOS Y VECTORES

// arrays o vectores
// existen dos tipos los predefinidos y los asocoiativos o personalizados

//PREDEFINIDOS se accede desde 0,1,2 en este caso solo 3 elementos
$array = array('elemento1', 2, 'elemento3');
Print'<br>';
// se muesta el elemento [?]
echo $array[2];
Print'<br>';
Print'<br>';

//ASOCIATIVOS O PERSONALIZADOS
$asociativo = array('clave1' => 'elemento1', 'clave2' => 2, 'clave3' => 'elemento3');
echo $asociativo['clave1'];
Print'<br>';
Print '-------------------------------------------------------';
Print'<br>';
//OPERADORES ARITMETICOS
//operadores
/* aritmeticos
adicion(+)
substraccion(-)
multiplicacion(*)
division(/)
porcentaje(%)
*/
//ejemplos

$adicion = 4+4;
echo $adicion;

$multiplicacion = $adicion * 3;
Print'<br>';
Print'<br>';
Print'<br>';
echo $multiplicacion;
Print'<br>';

//operdores de asignacion
//asignacion (=)
//ejemplo
$valor1 = 'holaaa';
$valor2 = 20;
Print'<br>';
echo $valor1;
Print'<br>';
echo $valor2;
Print'<br>';

//operadores de cadena o concatencaion
//punto(.)

$texto = ' yo tengo '. $valor2. ' años';
echo $texto;
Print'<br>';
Print'<br>';

$tengo = 'yo ';
$tengo .= ' tengo ';
$tengo .= ' 20 años';
echo $tengo;
Print'<br>';
Print'<br>';

//operadores comparacion
/*  Igual (==)
	Identico (===)
	Diferente (!= o <>)
	No identicos (!==)
	Menor que (<)
	Mayor que (>)
	Menor o igual que (<=)
	MAyor o igual que (>=)
*/
//ejemplo
echo (6>=4); //devuele 1 o true de lo contrario false 0
Print'<br>';
echo (5==11); //no escribe nada ya que 5 no es igual a 11
Print'<br>';
Print'<br>';

//operador de control de errores
// Arroba (@)
// ejemplo

echo 'Hola';
//@ define(); // esto deberia producir un error
Print'<br>';
Print'<br>';
//operadores de incremento
//incremento (**)

$variable = 3;
Print'<br>';
echo $variable++; //si quiero aumentar antes, le coloco los signos antes
Print'<br>';
echo $variable;
Print'<br>';
Print'<br>';

//operadores de logica
/* Y (&& o and) devuelve 1 si ambos operadores son 1
O (|| o or) devuelve 1 si algun operador es 1
o exclusivo (X O R) devuelve un so solo un operadr es 1
*/
//ejemplos

echo ((2 == 2)&&(2 != 1)); //lleva el valor de 1 o true si es verdadero
Print'<br>';
echo ((3 == 3) or (4 != 4)); //lleva uno si uno de los dos es verdadero
Print'<br>';
Print '-------------------------------------------------------';
Print'<br>';
//CONDICIONAL SI (IF)
if (7 == 7 or 5 == 6){
	echo 'Esto es verdad';
}
elseif (4 == 5){
	echo 'La segunda condicion es verdad';
}
else{
	echo 'Esto no es verdad';
}
Print'<br>';
Print '-------------------------------------------------------';
Print'<br>';
//CICLO WHILE
$aumento = 5;
while ($aumento<10) {
	echo $aumento.'<br>';
	$aumento++;
}
Print'<br>';
Print '-------------------------------------------------------';
Print'<br>';
//CICLO DO - WHILE
/*Este bucle es similar al while, le permite ralizar
primero el bloque de instrucciones y despues verifica la condicion
*/
$variable1 = 10;
do{
	echo $variable1;
}while($variable1<9);
Print'<br>';
$mivariable1 = 10;
while($mivariable1 <9){
	echo $mivariable1;
}
Print'<br>';
Print '-------------------------------------------------------';
Print'<br>';
//CICLO FOR
for($var = 1; $var<5; $var++){
	echo $var.'<br>';
}
Print'<br>';
for($var1 = 5; $var1>1; $var1--){
	echo $var1.'<br>';
}
Print'<br>';
Print '-------------------------------------------------------';
Print'<br>';
//FOREACH
/* permite traer todos los elementos de un arreglo
*/
//array predefinido
$predefinido = array('elemento1','elemento2');
foreach($predefinido as $elementos){
	echo $elementos.'<br>';
}
//array personalizado o asociativo
$asoci = array('clave1' => 'elemento1', 'clave2' => 'elementos');
foreach ($asoci as $claves => $elemento) {
	echo $claves.'='.$elemento.'<br>';
}
Print'<br>';
Print '-------------------------------------------------------';
Print'<br>';
//SWITCH
/* switch permite evaluar el valor de una variable y dependiendo
de su valor ejecuta un determinado numero de instrucciones
*/
$variable = 5;
switch ($variable) {
	case 1: echo 'vale uno';
	break;
	case 10: echo 'vale 10';
	break;
	case 'hola': echo 'es hola';
	break;
	default: echo 'no es ninguna';
}
Print'<br>';
Print '-------------------------------------------------------';
Print'<br>';
//FUNCIONES
/* funciones son aquellas que permiten dejar de repetir un bloque de acciones
*/
$p1=5;
$p2=2;
$p3=2;
function funcion($p1,$p2,$p3){
	$adicion = $p1+$p2+$p3;
	$multiplicacion = $adicion * 2;
	return $multiplicacion;
}
echo funcion ($p1,$p2,$p3);
Print'<br>';
Print '-------------------------------------------------------';
Print'<br>';

?>