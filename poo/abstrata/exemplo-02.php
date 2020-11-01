<?php

interface iPessoa {

    public function getNome();
    public function setNome($nome);

    public function getUser();
    public function setUser($user);

    public function getSenha();
    public function setSenha($senha);

}

abstract class Pessoa implements iPessoa {

    private $nome;
    private $user;
    private $senha;

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        return $this->nome;
    }

    public function getUser(){
        return $this->User;
    }
    public function setUser($user){
        return $this->user;
    }

    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($senha){
        return $this->senha;
    }

    protected function strLen():int {
        return strlen($this->nome);
    }

    public function __construct($nome, $user, $senha){
        $this->nome = $nome;
        $this->user = $user;
        $this->senha = $senha;
    }

    public function __toString(){
        $str = "Dados básicos:<br>Nome: $this->nome, número de caracteres do nome: ".$this->strLen()."<br>User: $this->user<br>Senha: $this->senha<br>";
        return $str;
    }

}

class Medico extends Pessoa {
    private $crm;
    
    public function getCrm(){
        return $this->crm;
    }
    public function setCrm($crm){
        $this->crm = $crm;
    }

}

$obj = new Medico("Robertinho", "ana_bl", "potatoww");
$obj->setCrm(1213);
echo $obj;

?>