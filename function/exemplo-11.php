<?php

//Trabalhando com funções anônimas
$fn = function ($word) {
    echo $word;
};

$fn(isset($_GET["word"])?$_GET["word"]:"Null");

?>