<?php
$fi=fopen("archivo.txt", "a")
or die("Problemas al crear el archivo");
fwrite($fi,'datos: ');
fwrite($fi,'\n');
fwrite($fi,$_POST['nombre']);
fwrite($fi,'\n');
fwrite($fi,$_POST['comentario']);
fwrite($fi,'\n');
fwrite($fi,'---------------------------------------------\n\n');
fclose($fi);
echo "Datos guardados";
?>