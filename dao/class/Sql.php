<?php
// Cria uma classe chamada Sql que pega todos os dados presentes na classe PDO, nativa do php
class Sql extends PDO {

    //declaração da variável de conexão
    private $conn;

    // Função que conecta o banco, como é um construtor, é executada assim que um objeto é criado
    public function __construct() {

        $this->conn = new PDO("mysql:local=localhost;dbname=bancoteste", "root", "");

    }

    // Função que automatiza a configuração de vários parâmetros, utilizando o setParam()
    private function setParams($statment, $parameters = array()) {

        foreach ($parameters as $key => $value) {

            $this->setParam($statment, $key, $value);

        }

    }

    // Função que define e configura cada um dos parâmetros passados para o statment
    private function setParam($statment, $key, $value) {

        $statment->bindParam($key, $value);

    }


    // Função que executa a query e retorna seu resultado
    public function query($rawQuery, $params = array()) {

        //linha do prepare
        $stmt = $this->conn->prepare($rawQuery);

        //configurando os parâmetros utilizando a outra função
        $this->setParams($stmt, $params);
        
        //executa e retorna  a execução
        $stmt->execute();

        return $stmt;

    }


    // Função de select
    public function select($rawQuery, $params = array()):array
    {
        $stmt = $this->query($rawQuery, $params);

        //retorna os dados coletados 
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}

?>