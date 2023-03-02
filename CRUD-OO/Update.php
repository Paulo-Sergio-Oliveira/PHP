<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$id = $_GET['id'];

include_once('Connect.php');
include_once('Crud.php');

$obj = new Crud($conn);
$obj->update($id,$nome,$email,$idade);