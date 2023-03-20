<?php
include_once('Connect.php');
include_once('Crud.php');
$cad = $obj->getAllCad();

$id = rand(1,999);
foreach ($cad as $info) {
    if ($id == $info['id']) {
        $id = rand(1,999);
    }
}
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$data = $_POST['data'];
$cpf = $_POST['cpf'];
$usuario = password_hash($_POST['user'], PASSWORD_DEFAULT);
$senha = password_hash($_POST['pass'], PASSWORD_DEFAULT);
if (empty($nome) or empty($email) or empty($idade) or empty($data) or empty($cpf)or empty($usuario) or empty($senha)) {
    header('Location: Cadastro.php');
    exit();
} else {
$obj = new Crud($conn);
$obj->setDadosCad($id, $nome, $email, $idade, $cpf, $data, $usuario, $senha);
$obj->insertCad();
}