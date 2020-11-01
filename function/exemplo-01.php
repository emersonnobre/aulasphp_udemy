<?php

// criação de subrotina: (não há retorno)
/* function ola () {
    echo "Olá mundo!<br>";
}*/

//criação de função: (há retorno)
function ola () {
    return "Olá mundo!<br>";
}

echo ola();

$frase = ola();

echo strlen($frase);
?>