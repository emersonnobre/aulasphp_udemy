<?php
//pegando vários parâmetros de forma dinâmica

function soma (int ...$valores) { //Permite que uma função aceite n valores como parâmetros e armazena em $valores emm formato de vetor.
    return array_sum($valores); //array_sum soma os campos de um vetor
}

echo soma(2, 3, 4, 133);
echo "<br>";
echo soma(1, 11);
?>