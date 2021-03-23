<form action="" method="post">
    <input type="text" name="dado">
    <input type="submit" value="Enviar">
</form>

<?php

if (isset($_POST["dado"])) {
    echo strip_tags($_POST["dado"], "<a><strong>");
}

?>