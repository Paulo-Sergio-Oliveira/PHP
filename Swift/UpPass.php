<?php
$id = $_GET['id'];
$senha = password_hash($_POST['pass'], PASSWORD_DEFAULT);

include_once('Connect.php');
include_once('Crud.php');

$obj = new Crud($conn);
$obj->updateSenha($id, $senha);