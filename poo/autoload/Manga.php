<?php

class Manga extends Livro {

    private $demografia;

    public function getDemo(){
        return $this->demografia;
    }
    public function setDemo($value){
        $this->demografia = $value;
    }

    public function __toString(){
        $str = "Valor do mangá: ".$this->getValor()."<br>Número da páginas: ".$this->getPaginas()."<br>Nome do autor: 
        ".$this->getAutor()."<br>Demografia: ".$this->getDemo()."<br>";
        return $str;
    }

}

?>