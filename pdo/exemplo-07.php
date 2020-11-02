<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <h1>Formulário php</h1>
    </header>
    <section class="section">
        <form action="" method="get">
            <div class="campo">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="" required="">
            </div>
            <div class="campo">
                <label for="senha">Senha: </label>
                <input type="password" name="senha" id="" required="">
            </div>
            <div class="campo">
                <input class="btn" type="submit" value="Enviar">
            </div>
        </form>
    </section>
    <a href="exemplo-01.php">Lista dos usuários cadastrados</a>
</body>
</html>

<?php

$con = new PDO("mysql:dbname=bancoteste;host=localhost", "root", "");

$nome = $_GET["nome"];
$senha = $_GET["senha"];

$stmt = $con->prepare("insert into tb_usuarios (nome, senha) values (:NOME, :SENHA)");

$stmt->bindParam(':NOME', $nome);
$stmt->bindParam(':SENHA', $senha);

$stmt->execute();

?>