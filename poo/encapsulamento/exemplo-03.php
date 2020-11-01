<?php

//Herança

class Gerente {

    protected $nome;
    protected $cpf;
    protected $salario;
    private $funcionarios;

    //Começo construtor
    public function __construct ($nome, $cpf, $salario){

        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->salario = $salario;
        $this->funcionarios = array(
            //Primerio funcionário
            array(
                'nome'=>'Marcelo',
                'cpf'=>'123'
            ),
            //Segundo funcionário
            array(
                'nome'=>'Gabriela',
                'cpf'=>'321'
            )
        );

    }
    //Fim construtor
    public function __toString(){

        return "O nome é: ".$this->nome."<br>O cpf é: ".$this->cpf."<br>O salário é: ".$this->salario."<br>".get_class($this)."<br>";

    }

}

class Funcionario extends Gerente{
    private $aumento;

    public function __construct ($nome, $cpf, $salario, $aumento){

        $this->nome = $nome;
        $this->aumento = $aumento;
        $this->cpf = $cpf;
        $this->salario = $salario;
        $this->funcionarios = array(
            //Primerio funcionário
            array(
                'nome'=>'Marcelo',
                'cpf'=>'123'
            ),
            //Segundo funcionário
            array(
                'nome'=>'Gabriela',
                'cpf'=>'321'
            )
        );

    }

    public function teste(){
        return $this->funcionarios;
    }

}

$gerente = new Gerente("Judas", "12222222222", 1900.90);
$funcionario = new Funcionario("Paulo", "29342349842", 900.70, 100);

echo $gerente;
echo $funcionario;

// echo json_encode($funcionarios->teste());

?>