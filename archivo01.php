<?php

$archivo = 'prueba.txt';

$abrir = fopen($archivo,'r+');
echo"<br>";
$tamanio=filesize($archivo);

echo $abrir;
echo"<br>";
echo $tamanio;

$leer = fread($abrir,$tamanio);//parámetro 1 lectura, 
echo"<br>";

echo $leer;

$escribir = fwrite($abrir, ' Otro hola');
fclose($abrir);

?>