<?php

require_once("config.php");

// Determina que a classe Cadastro, nesse ambiente, será a do namespace Cliente
use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Fernanda");
$cad->setEmail("fernanda@gmail.com");
$cad->setSenha("121201");

echo $cad->registrarVenda();

?>