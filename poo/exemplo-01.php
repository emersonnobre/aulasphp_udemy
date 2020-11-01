<?php

//Declaração de classe
class Manga {
    public $nome; //São necessários os encapsulamentos nos atributos e métodos
    public $autor;
    public $valor;

    public function showData () {
        return "O nome é: $this->nome<br>O autor é: $this->autor<br>O valor é: $this->valor";
    }
}

//instancia de um objeto da classe Manga
$obj = new Manga();

$obj->nome = "One piece";
$obj->autor = "Eiichiro Oda";
$obj->valor = 15.6;

//Invocação do método
echo $obj->showData();
?>