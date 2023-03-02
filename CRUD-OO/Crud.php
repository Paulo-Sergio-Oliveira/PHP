<?php
class Crud{
    private $connect;
    private $nome;
    private $email;
    private $idade;
    function __construct($conn)
    {
        $this->connect = $conn;
    }
    public function setDados($nome, $email, $idade){
        $this->nome = $nome;
        $this->email = $email;
        $this->idade = $idade;
    }
    public function insertDados(){
        if (empty($this->nome) or empty($this->idade) or empty($this->email)) {
            header('Location: FormI.php');
            die();
         } else {
        $sql = $this->connect->prepare("INSERT INTO clientes(nome, email, idade, data_now) VALUES(?,?,?,now())");
        $sql->bindParam(1,$this->nome);
        $sql->bindParam(2,$this->email);
        $sql->bindParam(3,$this->idade);
        if ($sql->execute()) {
            header('Location: Index.html');
            die();
        }else{
            echo 'Ops! Parece que algo deu errado...';
        }
    }
    }
    public function readInfo($id=null){
        if(isset($id)){
            $sql = $this->connect->prepare("SELECT * FROM clientes WHERE id=?");
            $sql->bindValue(1,$id);
            $sql->execute();
            return $sql->fetch(PDO::FETCH_OBJ);
        }else{
            $this->getAll();
        }
    }
    public function readName($nome=null){
        if(isset($nome)){
            $sql = $this->connect->prepare("SELECT * FROM clientes WHERE nome LIKE ?");
            $sql->bindValue(1,"%$nome%");
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $this->getAll();
        }
    }
    public function getAll(){
        $sql = $this->connect->query("SELECT * FROM clientes");
        return $sql->fetchAll();
    }
    public function update($id,$nome,$email,$idade){
        $sql = $this->connect->prepare("UPDATE clientes SET nome=?, email=?, idade=? WHERE id=?");
        $sql->bindValue(1,$nome,PDO::PARAM_STR);
        $sql->bindValue(2,$email,PDO::PARAM_STR);
        $sql->bindValue(3,$idade,PDO::PARAM_STR);
        $sql->bindValue(4,$id,PDO::PARAM_STR);
        if ($sql->execute()) {
            header('Location: ReadAll.php');
            die();
        }else{ 
        echo "Problemas ao tentar atualizar registro! <br> <a href='ReadAll.php'> Voltar </a>";
        }
    }
    public function delete($id){
        $sql = $this->connect->prepare("DELETE FROM clientes WHERE id=?");
        $sql->bindValue(1,$id,PDO::PARAM_STR);
        if ($sql->execute()) {
            header('Location: ReadAllD.php');
            die();
        }else{ 
        echo "Problemas ao tentar deletar registro! <br> <a href='ReadAllD.php'> Voltar </a>";
        }
    }
}
