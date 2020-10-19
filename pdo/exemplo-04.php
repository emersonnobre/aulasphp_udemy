<?php
//Alterando dados no banco de dados

$conn = new PDO("mysql:host=localhost;dbname=bancoteste", "root", "");

//Comando para update (allterar dados)
$stmt = $conn->prepare("UPDATE user SET name = :NAME, cpf = :CPF WHERE id = :ID");

$name = "Tayane";
$cpf = "akskdlal";
$id = 11;

$stmt->bindParam(":NAME", $name);
$stmt->bindParam(":CPF", $cpf);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "<p>Alterado</p>";

?>