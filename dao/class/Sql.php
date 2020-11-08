<?php

class Sql extends PDO {

    private $con;

    public function __construct(){
        $this->con = new PDO("mysql:dbname=bancoteste;host:localhost", "root", "");
    }

    // Guarda a query passada para um statement de preparação e ajusta os parâmetros através de outras classes.
    public function query($query, $params = array()){
        $stmt = $this->con->prepare($query);
        $this->setParams($stmt, $params);
        $stmt->execute();

        return $stmt;
    }

    // Faz um laço percorrendo todos os itens do array de parâmetro, e para cada um chamada a função setParam.
    private function setParams($stmt, $params = array()){
        foreach ($params as $key => $value) {
            $this->setParam($stmt, $key, $value);
        }
    }

    // Seta um parâmetro do stmt.
    private function setParam($stmt, $key, $value){
        $stmt->bindParam($key, $value);
    }

    //select usando a query function
    public function select($query, $params = array()){
        $stmt = $this->query($query, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
} 

?>