<?php 
include_once('Connect.php');
include_once('Crud.php');

$usuario = $_POST['user'];
$senha = $_POST['pass']; 

$obj = new Crud($conn);

$dados = $obj->getLogin(); 
foreach($dados as $login => $valores){
    if (password_verify($usuario,$valores->usuario) && password_verify($senha,$valores->senha)) {
        session_start();
        $_SESSION['user'] = $usuario;
        $_SESSION['id'] = $dados->id;
        header('Location:ProtectedPage.php');
        exit();
    }else{
        echo 'Usuário Incorreto.';
    }
}