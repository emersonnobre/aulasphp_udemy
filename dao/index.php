<?php

require_once("config.php");

$sql = new Sql();
$name = "Emerson";

$users = $sql->select("SELECT * FROM user WHERE name = 'Emerson'");

echo json_encode($users);

?>