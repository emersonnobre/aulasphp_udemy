<?php
// ______________ ESSA FORMA DE CRIPTOGRAFIA FOI REMOVIDA DO PHP _______________________
// dados a serem protegidos
$data = [ "senha"=>"123", "user"=>"emersin" ];

// definindo a chave do cofre
define('SECRET', pack('a16', 'chaveacesso'));

// criptografando os dados
$mcrypt = mcrypt_encrypt(
    MCRYPT_RIJNDAEL_128,
    SECRET,
    json_encode($data),
    MCRYPT_MODE_ECB
);

var_dump($mcrypt);