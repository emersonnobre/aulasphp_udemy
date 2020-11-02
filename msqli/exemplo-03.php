<?php

// Fazendo insert com o prepare

$con = new mysqli("localhost", "root", "", "dbphp7");

if ($con->connect_error){
    echo "Error: ".$con->connect_error;
}

$stmt = $con->prepare("insert into tb_usuarios (login, senha) values (?, ?)");

$login = "Maressa";
$senha = "maressinha";

$stmt->bind_param("ss", $login, $senha);

$stmt->execute();


?>