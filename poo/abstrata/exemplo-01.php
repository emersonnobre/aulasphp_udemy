<?php

//Classes abstratas

abstract class Pessoa {

    private $nome;
    private $idade;
    private $cpf;

    public function getNome(){
        return $this->nome;
    }
    public function setNome($value){
        $this->nome = $value;
    }

    public function getIdade():int{
        return $this->idade;
    }
    public function setIdade($value){
        $this->idade = $value;
    }

    public function getCpf(){
        return $this->cpf;
  }
    public function setCpf($value){
        $this->cpf = $value;
  }

}

// Classe gerente extendendo informações da classe abstrata pessoa
class Gerente extends Pessoa {
    
    private $funcionarios;
    private $salario;

    public function getFunc():array{
        return $this->funcionarios;
    }
    public function setFunc($value){
        $this->funcionarios = $value;
    }

    public function getSalario():float{
        return $this->salario;
    }
    public function setSalario($value){
        $this->salario = $value;
    }

}

//$obj = new Pessoa(); -> vai dar erro, pois classes abstratas n podem ser diretamente instanciadas

$obj = new Gerente();
$obj->setNome("Alberto");
$obj->setIdade(33);
$obj->setCpf("09801367144");
$obj->setFunc(array(
    array(
        'nome'=>'Arlindo',
        'idade'=>'20'
    ),
    array(
        'nome'=>'Juliana',
        'idade'=>'21'
    )
));
$obj->setSalario(20000);

echo json_encode($obj->getFunc());

?>