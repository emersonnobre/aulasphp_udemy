<?php

//Polimorfismo

abstract class Animal {
    
    public function falar(){
        return "Som";
    }
    public function mover(){
        return "Anda";
    }

}

class Cachorro extends Animal {

    //polimorfismo
    public function falar(){
        return "Au au";
    }

}

class Gato extends Animal {

    public function falar(){
        return "Miau miau";
    }

}

class Passaro extends Animal {

    public function falar(){
        return "Piu piu";
    }

    public function mover(){
        return "Voa e ".strtolower(parent::mover()); //pega o conteudo do retorno da classe mover, presente na classa pai desta clase.
    }

}

$pluto = new Cachorro();
$garfield = new Gato();
$canario = new Passaro();

echo $pluto->falar();

echo "<br>";

echo $pluto->mover();

echo "<br>-------------------------<br>";

echo $garfield->falar();

echo "<br>";

echo $garfield->mover();

echo "<br>-------------------------<br>";

echo $canario->falar();

echo "<br>";

echo $canario->mover();

?>