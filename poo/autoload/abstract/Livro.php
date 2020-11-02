<?php

abstract class Livro {

    private $numero_paginas;
    private $autor;
    private $valor;

    public function getPaginas(){
        return $this->numero_paginas;
    }
    public function setPaginas($value){
        $this->numero_paginas = $value;
    }

    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($value){
        $this->autor = $value;
    }

    public function getValor(){
        return $this->valor;
    }
    public function setValor($value){
        $this->valor = $value;
    }

}

?>