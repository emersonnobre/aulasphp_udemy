<?php

//Interfaces

interface Veiculo {

    public function acelerar($vel);
    public function frenar($vel);

}

//A classe carro implementará a interface veiculo, logo, deve respeitar suas regras.
class Carro implements Veiculo {

    public function acelerar($vel){
        echo "O veículo acelerou até a velocidade ".$vel."<br>";
    }

    public function frenar($vel){
        echo "O veículo frenou até a velocidade ".$vel."<br>";
    }

}

$carro = new Carro();

$carro->acelerar(200);
echo "<br>";
$carro->frenar(40);

?>