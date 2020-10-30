<form action="">
    <input type="text" name="nome" id="">
    <input type="date" name="data" id="">
    <select name="carro" id="">
        <option value="GTS">GTS</option>
        <option value="Camaro">Camaro</option>
    </select>
    <input type="submit" value="OK">
</form>
<?php

if (isset($_GET)){
    foreach ($_GET as $key => $value) {
        echo "<p>".$key.": ".$value."</p>";
    }
}
?>