<?php
include_once("connect.php");
$id = $_GET['id'];
try{
$stmt = $conn->prepare("DELETE FROM funcionarios WHERE id=:id");
$stmt->bindParam(":id",$id);
$stmt->execute();

header('Location: exclude.php');
exit();
} catch (PDOException $e) {
    echo "Erro ao Deletar: ".$e->getMessage();
}
?>