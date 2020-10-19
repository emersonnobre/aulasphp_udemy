<?php

class Usuario {

    private $id;
    private $name;
    private $cpf;

    public function getId(){
        return $this->id;
    }

    public function setId($value){
        $this->id = $value; 
    }

    public function getName(){
        return $this->name;
    }

    public function setName($value){
        $this->name = $value; 
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($value){
        $this->cpf = $value; 
    }

    public function loadById($id){

        $sql = new Sql();

        $results = $sql->select("select * from user where id = :ID", array(
            ":ID"=>$id
        ));

        if (count($results) > 0) {
            $row = $results[0];

            $this->setId($row['id']);
            $this->setName($row['name']);
            $this->setCpf($row['cpf']);
        }

    }
    
    public function __toString(){
        return json_encode(array(
            "id"=>$this->getId(),
            "name"=>$this->getName(),
            "CPF"=>$this->getCpf()
        ));
    }

}

?>