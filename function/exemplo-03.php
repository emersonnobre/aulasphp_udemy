<?php
// Utilizando parâmetros
$name = isset($_GET["name"])?$_GET["name"]:"fail";
$complement = "Bom dia";

// É possível estabelecer valores padrões para parâmetros não definidos
function message ($name, $complement = "padrão") {
    return "Olá $name, $complement";
}

$phrase = message($name, "Boa noite");

echo $phrase;
?>