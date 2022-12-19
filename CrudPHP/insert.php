<?php
include_once("connect.php");
try{
$prof = $_POST['prof'];
$servgerais = $_POST['servgerais'];
$gestao = $_POST['gestao'];
$email = $_POST['email'];
 if (empty($prof) or empty($servgerais) or empty($gestao) or empty($email)) {
    header('Location: form.php');
    exit();
 } else {
$id = 0;

$stmt = $conn->prepare("INSERT INTO funcionarios VALUES(:id,:prof,:servG,:gestao,:email)");

$stmt->bindParam(":id",$id);
$stmt->bindParam(":prof",$prof);
$stmt->bindParam(":servG",$servgerais);
$stmt->bindParam(":gestao",$gestao);
$stmt->bindParam(":email",$email);
$stmt->execute();

header('Location: select.php');
exit();
}

} catch (PDOException $e) {
    echo "Error: ".$e->getMessage();
}
?>
