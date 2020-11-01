<?php

//DateTime class
$dt = new DateTime; //instancia um objeto da classe DateTime
$periodo = new DateInterval("P20D"); //instancia um objeto da classe DateInterval

echo $dt->format("d/m/Y H:i:s"); //acessa o método format da classe DateTime, que formata a exibição da data

$dt->add($periodo); //adiciona o periodo especificado na criação do objeto no objeto $dt (DateTime)

echo "<br>";

echo $dt->format("d/m/Y H:i:s");
?>