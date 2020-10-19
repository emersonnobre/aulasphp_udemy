<?php

require_once("config.php");

$user1 = new Usuario();
$user1->loadById(3);

echo $user1;

?>