<?php
//Deletando dados da tabela

$conn = new PDO("mysql:local=localhost;dbname=dbphp7", "root", "");
$stmt = $conn->prepare("delete from tb_usuarios where idusuario = :ID");

$id = 5;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "<p>Elemento(s) deletado(s).</p>"


?>