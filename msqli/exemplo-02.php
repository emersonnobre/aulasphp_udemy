<?php

$html = "<form>";

$html .= "<label for='v'>Quantos dados?</label>";
$html .= "<input type='number' name='v'>";

$html .= "</form>";

echo $html;
?>

<?php 

$v = isset($_GET["v"])?$_GET["v"]:1;

for ($i = 0; $i < $v; $i++){

?>

<form action="exemplo-01.php" method="get">

    <div class="campo" style="display: block;">
        <label for="login">Login: </label>
        <input type="text" name="login" id="l">
    </div>
    <div class="campo" style="display: block;">
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="s">
    </div>
    <br>
    
<?php } ?>

    <div class="campo" style="display: block;">
        <input type="submit" value="Enviar">
    </div>
    
</form>

