<?php
include_once("connect.php");
try{
$id = $_POST['id'];
$prof = $_POST['prof'];
$servgerais = $_POST['servgerais'];
$gestao = $_POST['gestao'];
$email = $_POST['email'];

$stmt = $conn->prepare("UPDATE funcionarios SET professor=:prof,servgerais=:servG,gestao=:gestao,email=:email WHERE id=:id");

$stmt->bindParam(":id",$id);
$stmt->bindParam(":prof",$prof);
$stmt->bindParam(":servG",$servgerais);
$stmt->bindParam(":gestao",$gestao);
$stmt->bindParam(":email",$email);
$stmt->execute();

header('Location: atualiza.php');
exit();
} catch (PDOException $e) {
    echo "Error: ".$e->getMessage();
}
?>