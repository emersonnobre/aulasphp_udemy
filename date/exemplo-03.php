<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo ucwords (strftime("Dia: %A <br>Mês: %B<br>Ano: %Y", 1048892400));
echo "<br>";
echo strftime("Dia: %d<br>Mês: %m<br>Ano: %Y", 1048892400);
?>