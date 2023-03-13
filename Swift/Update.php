<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$id = $_GET['id'];
$data = $_POST['data'];
$cpf = $_POST['cpf'];

include_once('Connect.php');
include_once('Crud.php');

$obj = new Crud($conn);
$obj->updateCad($id,$nome,$email,$idade,$data,$cpf);