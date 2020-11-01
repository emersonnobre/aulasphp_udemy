<?php

//Herança
class Pessoa {
    protected $nome;
    protected $idade;
    protected $senha;
    private $cod_pessoa;

    public function getNome () {
        return $this->nome;
    }
    public function setNome($value){
        $this->nome = $value;
    }

    public function getIdade () {
        return $this->idade;
    }
    public function setIdade($value){
        $this->idade = $value;
    }

    public function getSenha () {
        return $this->senha;
    }
    public function setSenha($value){
        $this->senha = $value;
    }

    public function getCodPessoa () {
        return $this->cod_pessoa;
    }
    public function setCodPessoa($value){
        $this->cod_pessoa = $value;
    }

    public function getAll(){
        return array(
            'nome'=>$this->nome,
            'idade'=>$this->idade,
            'senha'=>$this->senha,
            'cod_pessoa'=>$this->cod_pessoa
        );
    }

}

//Criação de uma classe que herda todas as informações que não sejam privadas de Pessoa
class Programador extends Pessoa {
    private $cod_programador;

    public function getCodProgramador () {
        return $this->cod_programador;
    }
    public function setCodProgramador($value){
        $this->cod_programador = $value;
    }

    public function getAll(){
        return array(
            'nome'=>$this->nome,
            'idade'=>$this->idade,
            'senha'=>$this->senha,
            'cod_programador'=>$this->cod_programador
        );
    }
}

$pessoa = new Pessoa();
$programador = new Programador();

$pessoa->setNome("Marina");
$pessoa->setIdade(12);
$pessoa->setSenha("battona");
$pessoa->setCodPessoa(1);

$programador->setNome("Marcos");
$programador->setIdade(30);
$programador->setSenha("12de56ga");
$programador->setCodProgramador("01");

echo json_encode($pessoa->getAll());

echo json_encode($programador->getAll());

?>