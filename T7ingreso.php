<?php
session_start();
if(isset($_SESSION['username'])){
	echo "Puedes ver esta pagina";
	echo "<br/><a href=T7destruir.php> cerrar sesion</a>";
	//destruir o cerrar cesion llama otro programa llamado destruir
}else{
	echo "no puedes ver esta pagina, registrate o inicia sesion";
}
?>