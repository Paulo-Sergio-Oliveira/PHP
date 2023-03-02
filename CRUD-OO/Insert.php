<?php
include_once('Connect.php');
include_once('Crud.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];

$obj = new Crud($conn);
$obj->setDados($nome, $email, $idade);
$obj->insertDados();
