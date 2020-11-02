<?php

// Imprimindo select com query function.

$con = new mysqli("localhost", "root", "", "dbphp7");

if ($con->connect_error){
    echo "Error: ".$con->connect_error;
}

$result = $con->query("select login from tb_usuarios");

while ($row = $result->fetch_assoc()) {
    echo json_encode($row);
}
?>