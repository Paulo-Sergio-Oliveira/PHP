<?php
class Crud{
    private $connect;
    private $id;
    private $nome;
    private $email;
    private $idade;
    private $usuario;
    private $senha;
    private $cpf;
    private $data;
    
    function __construct($conn)
    {
        $this->connect = $conn;
    }

    public function setDadosCad($id, $nome, $email, $idade, $cpf, $data, $usuario, $senha){
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->idade = $idade;
        $this->cpf = $cpf;
        $this->data = $data;
        $this->usuario = $usuario;
        $this->senha = $senha;
    }
    
    public function insertCad(){
        $sql = $this->connect->prepare("INSERT INTO cadastro(id, nome, idade, email, data_nasc, cpf) VALUES(?,?,?,?,?,?)");
        $sql->bindParam(1,$this->id);
        $sql->bindParam(2,$this->nome);
        $sql->bindParam(3,$this->idade);
        $sql->bindParam(4,$this->email);
        $sql->bindParam(5,$this->data);
        $sql->bindParam(6,$this->cpf);
        if ($sql->execute()) {
            $sql = $this->connect->prepare("INSERT INTO login(id, usuario, senha) VALUES(?,?,?)");
            $sql->bindParam(1,$this->id);
            $sql->bindParam(2,$this->usuario);
            $sql->bindParam(3,$this->senha);
            if ($sql->execute()) {
                header('Location: Login.php');
                die();
            }else{
                echo 'Ops! Parece que algo deu errado...';
            }
        }else{
            echo 'Ops! Parece que algo deu errado...';
        }
    }
    public function getLogin(){
        $sql = $this->connect->prepare("SELECT * FROM login");
        $sql->execute(); 
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }
    public function readInfo($id=null){
        if(isset($id)){
            $sql = $this->connect->prepare("SELECT * FROM login WHERE id=?");
            $sql->bindValue(1,$id);
            $sql->execute();
            return $sql->fetch(PDO::FETCH_OBJ);
        }else{
            $this->getAllCad();
            $this->getAllLog();
        }
    }
    public function readUser($usuario=null){
        if(isset($usuario)){
            $sql = $this->connect->prepare("SELECT * FROM login WHERE usuario LIKE ?");
            $sql->bindValue(1,"%$usuario%");
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);
        }else{
            $this->getAllCad();
            $this->getAllLog();
        }
    }
    public function getAllCad(){
        $sql = $this->connect->query("SELECT * FROM cadastro");
        return $sql->fetchAll();
    }
    public function getAllLog(){
        $sql = $this->connect->query("SELECT * FROM login");
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }
    public function updateCad($id,$nome,$email,$idade,$data,$cpf){
        $sql = $this->connect->prepare("UPDATE cadastro SET nome=?, email=?, idade=?, data_nasc=?, cpf=? WHERE id=?");
        $sql->bindValue(1,$nome,PDO::PARAM_STR);
        $sql->bindValue(2,$email,PDO::PARAM_STR);
        $sql->bindValue(3,$idade,PDO::PARAM_STR);
        $sql->bindValue(4,$data,PDO::PARAM_STR);
        $sql->bindValue(5,$cpf,PDO::PARAM_STR);
        $sql->bindValue(6,$id,PDO::PARAM_STR);
        if ($sql->execute()) {
            header('Location: Tabela.php');
            die();
        }else{ 
        echo "Problemas ao tentar atualizar registro! <br> <a href='ReadAll.php'> Voltar </a>";
        }
    }
    public function updateSenha($id, $senha){
        $sql = $this->connect->prepare("UPDATE login SET senha=? WHERE id=?");
        $sql->bindValue(1,$senha,PDO::PARAM_STR);
        $sql->bindValue(2,$id,PDO::PARAM_STR);
        if ($sql->execute()) {
            header('Location: Login.php');
            die();
        }else{ 
        echo "Problemas ao tentar atualizar registro! <br> <a href='ReadAll.php'> Voltar </a>";
        }
    }
    public function delete($id){
        $sql = $this->connect->prepare("DELETE FROM cadastro WHERE id=?");
        $sql->bindValue(1,$id,PDO::PARAM_STR);
        if ($sql->execute()) {
            $sql = $this->connect->prepare("DELETE FROM login WHERE id=?");
            $sql->bindValue(1,$id,PDO::PARAM_STR);
            if ($sql->execute()) {
                header('Location: Tabela.php');
                die();
            }else{ 
            echo "Problemas ao tentar deletar registro! <br> <a href='ReadAllD.php'> Voltar </a>";
            }
        }else{ 
        echo "Problemas ao tentar deletar registro! <br> <a href='ReadAllD.php'> Voltar </a>";
        }
    }
}
