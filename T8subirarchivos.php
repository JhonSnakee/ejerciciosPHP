<?php
$carpeta = "files/"; //ruta donde va a quedar el archivo
//la carpeta debe existir en xampp/htdocs y estar dentro de nuestro directorio
opendir($carpeta);//abrir el directorio
$destino = $carpeta.$_FILES['foto']['name'];//lugar donde quedara el archivo

copy($_FILES['foto']['tmp_name'],$destino);
echo "archivo subido exitosamente"."<br/>";

$nombre=$_FILES['foto']['name'];
echo "<img src=\"files/$nombre\"><br/>";

echo $_FILES['foto']['name']."<br/>"; //muestra el nombre del archivo
echo $_FILES['foto']['size']."bytes"."<br/>"; //muestra el peso del arcivo
echo $_FILES['foto']['type'];//muestra el tipo
?>