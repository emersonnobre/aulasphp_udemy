<?php

// Método que substituiu o mcrypt.
define('SECRET_IV', pack('a16', 'acesso'));
define('SECRET', pack('a16', 'acesso'));

// dados a serem criptografados
$data = [
    'user'=>'emerson',
    'senha'=>'123'
];

// criptografando...
$openssl = openssl_encrypt(
    json_encode($data),
    'AES-128-CBC',
    SECRET,
    0,
    SECRET_IV
);

// Para descriptografar
$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);
var_dump(json_decode($string, true));

echo $openssl;