<?php

$json = '[{"nome":"Joao","email":"joao@gmail.com"},{"nome":"Roberta","email":"roberta@gmail.com"}]';

//converte o $json para array e guarda dentro da variaval data
$data = json_decode($json, true);

print_r($data);
?>