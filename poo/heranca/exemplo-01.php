<?php

//Herança

// Classe CPF extendendo da classe Documento

class Documento {

    private $titular;
    private $numero;

    public function getTitular(){
        return $this->titular;
    }
    public function setTitular($value){
        $this->titular = $value;
    }

    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($value){
        $this->numero = $value;
    }

    public function getAll(){
        return array(
            'titular'=>$this->titular,
            'numero'=>$this->numero
        );
    }

}

class CPF extends Documento {

    public function validarCPF():bool{
        $numeroCPF = $this->getNumero();

        return true;
    }

}

$cpf = new CPF();

$cpf->setNumero("101984184");
$cpf->setTitular("Poco");

var_dump($cpf->validarCPF());
echo "<br>";
echo json_encode($cpf->getAll());
?>