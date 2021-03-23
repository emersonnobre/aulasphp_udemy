<?php

$id = (isset($_GET["id"]))?$_GET["id"]:2;

if (!is_numeric($id)) 
{
    exit("Sai daqui seu lixo!");
}


$conn = mysqli_connect("localhost", "root", "", "nutri");

$query = "select nome from pacientes where id = $id";

$exec = mysqli_query($conn, $query);

while ($resultado = mysqli_fetch_object($exec)) {
    echo $resultado->nome . "<br>";
}
?>