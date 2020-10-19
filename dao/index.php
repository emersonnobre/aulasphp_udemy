<?php

require_once("config.php");

//Atribui os dados do registro com id igual a 3 ao objeto user1
// $user1 = new Usuario();
// $user1->loadById(3);
// echo $user1;

//Guardando o select de todos os registros no result e mostrando
// $result = Usuario::getList();
// echo json_encode($result);

$name = "la";

$result = Usuario::search($name);
echo json_encode($result);


?>