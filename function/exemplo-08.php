<?php
// declarando o tipo de retorno de uma função

function soma(float ...$val): float{
    return array_sum($val);
}

var_dump(soma(1, 2)); //float(3).
?>