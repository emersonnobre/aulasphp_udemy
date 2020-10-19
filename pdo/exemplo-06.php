<?php

$conn = new PDO("mysql:local=localhost;dbname=bancoteste", "root", "");

//Isso inicia a transação
$conn->beginTransaction();

$stmt = $conn->prepare("delete from user where id = ?");// outra forma de usar parametros.
//Sem o bindParam, utiliza array dentro do execute();

$id = 11;

$stmt->execute(array($id));

//Cancela toda a transação função rollback();
//$conn->rollback();

//Confirma toda a transação função commit();
$conn->commit();

echo "<p>Delete ok!</p>";

?>