<?php

$pasta = 'arquivos';
$permissao = "0775";
// total para owner e group, leitura e execução para guests.

if (!is_dir($pasta)) mkdir($pasta, $permissao);

?>