<?php

$pessoas = array();

//array_push insere um valor dentro de um array já criado.
//insere um array contendo nome e email dentro do array (parece um array de objetos)
array_push($pessoas, array(
    'nome'=>'Joao',
    'email'=>'joao@gmail.com'
));

array_push($pessoas, array(
    'nome'=>'Roberta',
    'email'=>'roberta@gmail.com'
));

//coverte array para json
echo json_encode($pessoas);
?>