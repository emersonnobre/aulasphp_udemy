<?php
// Passagem de parâmetro por valor!!!!!!!!!!
$a = 50;

function dobraValor($a){
    $a = $a * 2;
    return $a;
}

echo dobraValor($a); //irá retornar o valor de $a dobrado, mas não alterará o valor de $a original.
echo "<br>";
echo $a; //prova que o valor não foi realmente alterado.
?>