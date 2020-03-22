<?php
$filename = $_POST['archivo'];
unlink($filename);
echo "El archivo ha sido eliminado con exito;"
?>