<?php

//Trabalhando com métodos estáticos

class Filme {

    private $nome;
    private $diretor;
    private $ano;

    public function getNome () {
        return $this->nome;
    }
    public function setNome ($value) {
        $this->nome = $value;
    }

    public function getDiretor () {
        return $this->diretor;
    }
    public function setDiretor ($value) {
        $this->diretor = $value;
    }

    public function getAno ():int {
        return $this->ano;
    }
    public function setAno ($value) {
        $this->ano = $value;
    }

    public function getAll () {
        return array (
            'nome'=>$this->nome,
            'diretor'=>$this->diretor,
            'ano'=>$this->ano
        );
    }

    public static function nameLength($value):int {
        return strlen($value);
    }

}

$obj = new Filme();
$obj->setNome("Titanic");
$obj->setDiretor("James Cameron");
$obj->setAno("2005");
$filme = "Indomavel";

echo $obj->getNome();

echo "<br>";

echo "Tamanho do nome do filme: ".Filme::nameLength($obj->getNome())."<br>";

echo $filme."<br>";

echo "Tamanho do nome do filme: ".Filme::nameLength($filme)."<br>";

?>