<?php

$con = true;

// enquanto a condição estabelecida for true, ele irá rodar o loop.
while ($con) {
    $numero = rand(1, 100); //função rand sorteia numeros aleatorios em um intervalo dado
    if ($numero === 77) {
        echo " SETENTA E SETE.";
        $con = false;
    }
    echo $numero." ";
}
?>