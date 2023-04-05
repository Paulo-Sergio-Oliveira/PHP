<?php 
include_once('Connect.php');
include_once('Crud.php');

$usuario = $_POST['user'];
$senha = $_POST['pass']; 

$obj = new Crud($conn);

$dados = $obj->getLogin();
$dados2 = $obj->getAllCad();
foreach($dados as $login => $valores){
    if (password_verify($usuario,$valores->usuario) && password_verify($senha,$valores->senha)) {
        session_start();
        $_SESSION['user'] = $usuario;
        $_SESSION['id'] = $valores->id;
        foreach($dados2 as $cad => $values){
            if ($valores->id == $values->id) {
                $_SESSION['nome'] = $values->nome;
                $_SESSION['idade'] = $values->idade;
                $_SESSION['email'] = $values->email;
                $_SESSION['data_nasc'] = $values->data_nasc;
                $_SESSION['cpf'] = $values->cpf;
            }
        }
        header('Location:ProtectedPage.php');
        exit();
    }else{
        echo 'Usuário Incorreto.';
    }
}