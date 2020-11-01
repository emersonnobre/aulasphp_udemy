<?php
// Tornando a função mais abstrata
// Podemos usar a func_get_args(), que pega todos os argumentos passados para uma função e retorna.
// Assim, a função pode ou não receber argumentos, sem precisarmos especificar.
function ola () {
    $args = func_get_args();
    return $args;
}

var_dump(ola("Bom dia", "Matheus, ", "como vai?"));
echo "<br>";
$phrase = ola ("Bom dia, ", "nenenzinho.");
print_r($phrase);
?>