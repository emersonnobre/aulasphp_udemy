<?php

require_once("config.php");

//revela o caminho em que será armazendo o txt resultante da sessão.
echo session_save_path();
echo "<br>";

//retorna um valor int de acordo com o status da sessão.
session_status();

print_r($_SESSION);
session_destroy();
echo "<br>";
?>
<a href="exemplo-06.php">Next</a>
<a href="exemplo-01.php">Reiniciar</a>