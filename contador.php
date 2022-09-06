<?php

function contador(){
    $archivo='contando.txt';
    $abrir=fopen($archivo,'r+');
    $tamanio=filesize($archivo);
    $leer=fread($abrir, $tamanio);
    $contenido=$leer+1;

    $posicion=ftell($abrir);

    if($posicion==$tamanio){
        fseek($abrir,0);

    }
    fwrite($abrir,$contenido);
    fclose($abrir);

    return($contenido);

}

echo contador();

?>