<?php

// Trabalhando com autoload de classes
// DIRETÓRIO IGUAL

// Busca e inclui automaticamente classes solicitadas que estão na mesma pasta que ela.
function __autoload($classname){
    require_once("$classname.php");
}

$fullmetal = new Manga();
$fullmetal->setValor(122.60);
$fullmetal->setPaginas("-");
$fullmetal->setAutor("DK");
$fullmetal->setDemo("Shonen");

$berserk = new Manga();
$berserk->setValor(150.60);
$berserk->setPaginas("-");
$berserk->setAutor("Murilo");
$berserk->setDemo("Seinen");

echo $fullmetal;
echo "---------------<br>";
echo $berserk;

?>