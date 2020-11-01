<?php

class Pessoa {

    public $nome = "Daniela";
    protected $idade = 27;
    private $senha = "batata";

    //Considerando que o método está dentro da própria classe, ele tem acesso supremo
    //a qualquer tipo de proteção imposta aos seus elementos.
    public function getAll () {
        echo $this->nome."<br>";
        echo $this->idade."<br>";
        echo $this->senha."<br>";
    }

}

$obj = new Pessoa();

//echo $obj->nome."<br>"; //vai dar certo, pois é um elemento público.
//echo $obj->idade."<br>"; //vai dar errado, pois é um elemento protected.
//echo $obj->senha."<br>"; //vai dar errado, pois é um elemento private.

$obj->getAll(); //vai dar certo, pois estamos utilizando um elemento público com acesso supremo.

?>