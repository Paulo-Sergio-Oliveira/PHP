<?php
include_once('connect.php');
$id = $_GET['id'];
try {
    $stmt = $conn->prepare('SELECT * FROM funcionarios WHERE id=:id');
    $stmt->bindParam(":id",$id);
    $stmt->execute();
    $result = $stmt->fetch((PDO::FETCH_OBJ));
    echo "<!DOCTYPE html>
    <html lang='pt-br'>
    
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Tela de Update</title>
        <link rel='stylesheet' type='text/css' href='Bootstrap/css/bootstrap.min.css'>
    </head>
    <body>
    <link rel='stylesheet' type='text/css' href='Bootstrap/css/bootstrap.min.css'>
    <div class='container' style='margin-top: 20px;'>
        <header> <h2> Registro $id </h2> </header>
        <form method='POST' action='update.php'>
            <input name='id' value='$id' type='hidden'>
            <div class='mb-3'>
                <span class='input-group-text' id='inputGroup-sizing-lg'>Professor</span>
                <input autofocus value='$result->professor' type='text' name='prof' class='form-control' placeholder='Nome completo do Professor' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-lg'>
            </div>
            <div class='mb-3'>
                <span class='input-group-text' id='inputGroup-sizing-lg'>Serviços Gerais</span>
                <input value='$result->servgerais' type='text' name='servgerais' class='form-control' placeholder='Nome completo do membro dos Serviços Gerais' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-lg'>
            </div>
            <div class='mb-3'>
                <span class='input-group-text' id='inputGroup-sizing-lg'>Gestão</span>
                <input value='$result->gestao' type='text' name='gestao' class='form-control' placeholder='Nome completo do membro da Gestão' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-lg'>
            </div>
            <div class='mb-3'>
                <span class='input-group-text' id='inputGroup-sizing-lg'>E-mail</span>
                <input value='$result->email' type='email' name='email' class='form-control' placeholder='Exemplo@gmail.com' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-lg'>
            </div>
            <button type='submit' class='btn btn-primary'>Atualizar</button>
            <a href='atualiza.php'><button type='button' class='btn btn-primary'>Voltar</button> </a>
        </form> 
    </div>
    </body>";
} catch (PDOException $e) {
    echo utf8_encode($e->getMessage());
}
?>