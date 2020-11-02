<?php
// Esta é a classe cadastro dentro do namespace Cliente.

namespace Cliente;

// Herdando os elementos da classe cadastro genérica, que está na raíz da class
class Cadastro extends \Cadastro {

    public function registrarVenda(){

        echo "Foi registrada uma venda para o cliente ".$this->getNome();

    }

}


?>