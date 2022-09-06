<?php
$archivo="texto.txt";

unlink($archivo);

header('location:../index.php');

?>