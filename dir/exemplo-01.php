<?php
//Verficando a existência de um diretório

$dirname = "images";

if (!is_dir($dirname)){ // Se not exists dirname
    mkdir($dirname); // Cria
    echo "$dirname criado com sucesso!<br>";
} else {
    echo "$dirname já existe";
}

?>