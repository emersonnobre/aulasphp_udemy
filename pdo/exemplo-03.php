<?php
// Inserindo dados no banco de dados 
$conn = new PDO("mysql:host=localhost;dbname=bancoteste", "root", "");

// Utilizando parametros ao inves de dados no prepare
$stmt = $conn->prepare("insert into user values (default, :NAME, :CPF)");

$name = "Rebecka";
$cpf = "ola";

// A função bind param trata dos parametros solicitados no $stmtm = login e password
$stmt->bindParam(":CPF", $cpf);
$stmt->bindParam(":NAME", $name);

$stmt->execute();

echo "<p>Inserido!</p>";

?>