<?php

$salario = isset($_GET["sal"])?$_GET["sal"]:103340034;

function dobraSalario ($salario) {
    $new_salario = $salario * 2;

    return $new_salario;
}

$salario2 = dobraSalario($salario);

echo $salario2;

?>