<?php
session_start(); //Sentencia que permite inicializar una sesion o sistema de logueo
include("T6conexion.php");
if(isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['pw']) && !empty($_POST['pw']))
{
	$con =  mysqli_connect($host,$user,$pw) or die ("Problemas al conectar al servidor");
	mysqli_select_db($con,$db) or die ("Problemas al conectar la db");
	$sel = mysqli_query($con,"SELECT USER, PW FROM registro WHERE USER='$_POST[user]'");
	$sesion = mysqli_fetch_array($sel);//permite traer datos de la base de datos
	if($_POST['pw'] == $sesion['PW']){
		$_SESSION['username']=$_POST['user'];
		echo "sesion exitosa";
	}else{
		echo "combinacion erronea";
	}
}else{
	echo "debes llenar los dos campos";
}
?>