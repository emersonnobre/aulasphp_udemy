<?php

if (isset($_POST["user"]) && isset($_POST["password"])) {
    echo "entrou";
    header("tela1.php?op=$openssl");
    $user = strip_tags($_POST["user"]);
    $password = strip_tags($_POST["password"]);
    $dados_login = [ "usuario"=>$user, "senha"=>$password ];
    
    define('SECRET', pack('a16', 'acesso'));
    define('SECRET_IV', pack('a16', 'acesso_iv'));
    $openssl = openssl_encrypt(json_encode($dados_login), 'AES-128-CBC', SECRET, 0, SECRET_IV);
} else {
    header("index.html");
}