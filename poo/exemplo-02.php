<?php

//Trabalhando com atributos privados, get e set
class Pessoa {
    //Atributos
    private $nome;
    private $email;
    private $senha;
    //Gets e sets
    public function getNome () {
        return $this->nome;
    }
    public function setNome ($nome) {
        $this->nome = $nome;
    }

    public function getEmail () {
        return $this->email;
    }
    public function setEmail ($email) {
        $this->email = $email;
    }

    public function getSenha () {
        return $this->senha;
    }
    public function setSenha ($senha) {
        $this->senha = $senha;
    }

    //Método que exibe as informações do objeto utilizando os get.
    public function show () {
        return array(
            'nome'=>$this->getNome(),
            'email'=>$this->getEmail(),
            'senha'=>$this->getSenha()
        );
    }
}

$obj = new Pessoa();

$obj->setNome('Marcos');
$obj->setEmail('marcos@gmail.com');
$obj->setSenha('senhamarcos');

echo json_encode($obj->show());
?>