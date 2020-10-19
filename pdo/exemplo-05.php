<?php
//Deletando dados da tabela

$conn = new PDO("mysql:local=localhost;dbname=bancoteste", "root", "");
$stmt = $conn->prepare("delete from user where id = :ID");

$id = 4;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "<p>Elemento(s) deletado(s).</p>"


?>