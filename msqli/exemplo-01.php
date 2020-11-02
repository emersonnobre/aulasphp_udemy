<?php

// Instanciando um objeto que recebe a classe do mysqli();
// new mysqli("ip", "nome do usuario", "senha", "nome do banco");
$con = new mysqli("localhost", "root", "", "dbphp7");

// Verificando se o objeto retorna algum erro (falha na conexão);
if ($con->connect_error){
    echo "Erro: ".$con->connect_error;
}

// Utilizando o método prepare para fazer o preparo de uma instrução sql;
$stmt = $con->prepare("insert into tb_usuarios (login, senha) values (?, ?)");



$login = isset($_GET["login"])?$_GET["login"]:"default";
$senha = isset($_GET["senha"])?$_GET["senha"]:"default";

// Enviando os parâmetros para a instrução;
$stmt->bind_param("ss", $login, $senha);

// Executando a instrução
$stmt->execute();

if (($stmt)) {
    echo "Dados inseridos.";
}

?>