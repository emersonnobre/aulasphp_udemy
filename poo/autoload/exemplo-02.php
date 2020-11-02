<?php

// Trabalhando com autoload de classes
// DIRETÓRIOS DIFERENTES

// UTILIZANDO PASSANDO COMO PARAMETRO UMA STRING COM O NOME DA FUNCAO

function verifica($classname){
    if (file_exists($classname.".php") === true){
        require_once($classname.".php");
    }
}

spl_autoload_register("verifica");

/////////////////////////////////////
// UTILIZANDO A PROPRIA FUNCAO COMO PARAMETRO //Busca as classes presentes na pasta abstract

spl_autoload_register(function($classname){
    if (file_exists("abstract".DIRECTORY_SEPARATOR.$classname.".php") === true) {
        require_once("abstract".DIRECTORY_SEPARATOR.$classname.".php");
    }
});

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