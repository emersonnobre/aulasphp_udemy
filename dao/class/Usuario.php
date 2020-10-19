<?php
//Classe do usuário, contendo seus dados e métodos
class Usuario {

    //declaração dos atributos
    private $id;
    private $name;
    private $cpf;

    //coonfigurando gets e sets
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

    // Busca um elemento no banco de dados pelo id e atribui seus dados ao objeto instanciado
    public function loadById($id){

        $sql = new Sql();

        //guarda em results os selects obtidos na solicitação
        $results = $sql->select("select * from user where id = :ID", array(
            ":ID"=>$id
        ));

        //se o id buscado existir, guarda os valores deste registro no objeto
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

    public static function getList(){
        $sql = new Sql();
        return $sql->select("select * from user order by name");
    }

    public static function search($name){
        $sql = new Sql();
        
        return $sql->select("select name from user where name like :SEARCH order by name", array(
            ':SEARCH'=>"%".$name."%"
        ));
    }

}

?>