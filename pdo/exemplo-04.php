<?php
//Alterando dados no banco de dados

$conn = new PDO("mysql:host=localhost;dbname=bancoteste", "root", "");

//Comando para update (allterar dados)
$stmt = $conn->prepare("UPDATE tb_usuarios SET nome = :NOME, senha = :SENHA WHERE idusuario = :ID");

$name = "Tayane";
$senha = "akskdlal";
$id = 1;

$stmt->bindParam(":NOME", $name);
$stmt->bindParam(":SENHA", $senha);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "<p>Alterado</p>";

?>