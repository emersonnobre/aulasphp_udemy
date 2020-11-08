<?php

class Usuario {

    private $nome;
    private $senha;
    private $idusuario;

    public function getNome(): string{
        return $this->nome;
    }
    public function setNome($value){
        $this->nome = $value;
    }

    public function getSenha(): string{
        return $this->senha;
    }
    public function setSenha($value){
        $this->senha = $value;
    }

    public function getId(){
        return $this->idusuario;
    }
    public function setId($value){
        $this->idusuario = $value;
    }

    // Retorna uma lista com todos os usuários cadastrados no banco.
    public static function getList(){
        $sql = new Sql();
        $stmt = $sql->select("select * from tb_usuarios order by nome");
        return $stmt;
    }

    // Método que setta os dados passados por um array.
    public function setData($data = array()){
        $row = $data[0];
        $this->setNome($row['nome']);
        $this->setSenha($row['senha']);
        $this->setId($row['idusuario']);
    }

    // Retorna uma lista filtrada de acordo com a pesquisa
    public static function search($nome){
        $sql = new Sql();
        $stmt = $sql->select("select * from tb_usuarios where lower(nome) like :NOME order by nome", array(
            ':NOME'=>'%'.$nome.'%'
        ));
        return $stmt;
    }



    // Retorna as informações de um usuário de acordo com o nome e a senha.
    public function login($nome, $senha){
        $sql = new Sql();
        $results = $sql->select("select * from tb_usuarios where nome = :NOME and senha = :SENHA", array(
            ':NOME'=>$nome,
            ':SENHA'=>$senha
        ));

        if(count($results) > 0){
            $this->setData($results);
        } else {
            throw new Exception("<strong>Login não encontrado!!</strong>");
            
        }
    }

    // Procurando um usuário pelo id passado e, caso exista, atribuindo seus valores ao objeto.
    public function loadById($id){
        $sql = new Sql();
        $results = $sql->select("select * from tb_usuarios where idusuario = :ID", array(
            ':ID'=>$id
        ));

        if(count($results) > 0){

            $this->setData($results);
        }

    }

    // Inserindo os dados do objeto no banco.
    public function insert(){
        $sql = new Sql();
        $sql->query("insert into tb_usuarios (nome, senha, idusuario) values (:NOME, :SENHA, default)", array(
            ':NOME'=>$this->getNome(),
            ':SENHA'=>$this->getSenha()
        ));

    }

    // Update no banco de acordo com o objeto
    public function update($nome, $senha){
        $this->setNome($nome);
        $this->setSenha($senha);

        $sql = new Sql();
        $sql->query("update tb_usuarios set nome = :NOME, senha = :SENHA where idusuario = :ID", array(
            ':NOME'=>$this->getNome(),
            ':SENHA'=>$this->getSenha(),
            ':ID'=>$this->getId()
        ));
    }

    public function delete(){
        $sql = new Sql();
        $sql->query("delete from tb_usuarios where idusuario = :ID", array(
            ':ID'=>$this->getId()
        ));
        
    }

    public function __toString(){
        return json_encode(array(
            'Nome: '=>$this->getNome(),
            'Senha: '=>$this->getSenha(),
            'Id: '=>$this->getId()
        ));
    }

}

?>