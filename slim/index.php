<?php

require_once("vendor/autoload.php");

$app = new \Slim\Slim();
// instância da classe

$app->get('/', function() {
    
});

//definindo rotas

$app->get('/hello/:name', function($name) {
    echo "Hello, ".$name;
});

$app->run();

?>