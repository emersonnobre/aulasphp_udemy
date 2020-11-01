<?php

$ts = strtotime("2003-03-29"); //converte a data da string em time stamp

echo $ts."<br>";

echo date("l, d/m/Y", 1048892400); //recebe como parâmetro o time stamp da data desejada
?>