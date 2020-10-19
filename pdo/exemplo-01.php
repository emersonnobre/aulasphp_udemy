<?php

// Declaração da variável de conexão
$conn = new PDO("mysql:dbname=bancoteste;host=localhost", "root", "");

//preparando o pedido
$stmt = $conn->prepare("select * from user");

//execução da query
$stmt->execute();

//guardando os resultados da query no $results
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//mostrando na tela :D
foreach ($results as $row) {

    foreach ($row as $key => $value) {

        echo "<strong>" .$key. ": </strong>" .$value. "<br/>";

    }

    echo "=================================================<br/>";

}

?>