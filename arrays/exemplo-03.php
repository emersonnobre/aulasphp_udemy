<?php

$pessoas = array();

//array_push insere um valor dentro de um array já criado.
//insere um array contendo nome e email dentro do array (parece um array de objetos)
array_push($pessoas, array(
    'nome'=>'João',
    'email'=>'joao@gamil.com'
));

array_push($pessoas, array(
    'nome'=>'Roberta',
    'email'=>'roberta@gmail.com'
));

print_r($pessoas);
?>