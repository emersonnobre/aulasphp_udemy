<?php

//Métodos mágicos

class Game {

    private $nome;
    private $empresa;
    private $valor;

    //Estamos dizendo que toda ve que um objeto for criado, o usuário pode setar os atributos diretamente
    //nos parênteses da instância.
    public function __construct ($nome, $empresa, $valor) {
        $this->nome = $nome;
        $this->empresa = $empresa;
        $this->valor =$valor;
    }

    public function __destruct () {
        //var_dump("Método destruct chamado.");
    }

    //Definindo o método toString:
    public function __toString () {
        return "O jogo ".$this->nome." é da empresa ".$this->empresa." e seu valor é ".$this->valor.".";
    }

}

//Podemos passar assim, fica mais rápido e inteligente do que fazer vários setters.
$obj = new Game("God of war", "Sony", "200");

var_dump ($obj);

echo "<br>";

//Excluindo o objeto e chamando o método destrutor.
//unset ($obj);

//dando o echo no objeto e invocando o método toString.
echo $obj;
?>