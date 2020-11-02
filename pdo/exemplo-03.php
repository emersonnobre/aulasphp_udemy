<form action="" method="get">

    <label for="login">Login: </label>
    <input type="text" name="login" id="">
    <br>
    <label for="senha">Senha: </label>
    <input type="password" name="senha" id="">
    <input type="submit" value="Enviar">

</form>


<?php
// Inserindo dados no banco de dados 
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

// Utilizando parametros ao inves de dados no prepare
$stmt = $conn->prepare("insert into tb_usuarios (login, senha) values (:LOGIN, :SENHA)");

$login = isset($_GET["login"])?$_GET["login"]:"nulo";
$senha = isset($_GET["senha"])?$_GET["senha"]:"nulo";

// A função bind param trata dos parametros solicitados no $stmtm = login e password
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);

$stmt->execute();

echo "<p>Inserido!</p>";

?>

<a href="exemplo-01.php">Ver todos os usuários</a>