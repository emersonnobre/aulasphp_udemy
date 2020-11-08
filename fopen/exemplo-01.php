<?php

// Criando e manipulando arquivos com o fOpen().

$file = fopen("arquivo.txt", "a+"); // Abre o arquivo no modo de escrita, o + indica que ele deve ser criado nessa linha;

fwrite($file, date("d/m/Y"). "\r\n"); // Edita o arquivo passado pela variável de referência (resource);

fclose($file); // Encerra os processos;

?>