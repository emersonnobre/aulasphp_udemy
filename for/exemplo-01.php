<?php

//contador; intervalo condicional; incremento/decremento
/*for ($i = 0; $i < 10; $i++) {

    echo $i."<br>";

}*/

for ($i = 0; $i <= 1000; $i += 5) {

    // vai retirar os numeros dentro do intervalo entre 200 e 800.
    if ($i >=200 && $i <= 800) continue; //segue o baile, sai desse trecho do laço.
    if ($i === 900) break; //quando for igual a 900, o ciclo para.
    echo $i."<br>";

}

?>