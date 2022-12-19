<?php
include_once('connect.php');

try {
    $stmt = $conn->prepare('SELECT * FROM funcionarios');
    $stmt->execute();
    echo '<title>Tabela</title>
    <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
    <div class="container" style="margin-top: 20px;">
    <table class="table table-bordered table-dark" style="text-align: center;">';
    echo '<tr><th scope="col">ID</th><th scope="col">Professor</th><th scope="col">Serviços Gerais</th>
    <th scope="col">Gestão</th><th scope="col">E-mail</th></tr>';
    while ($result = $stmt->fetch((PDO::FETCH_OBJ))) {
        echo "<tr><td> $result->id </td>
        <td> $result->professor </td>
        <td> $result->servgerais </td>
        <td> $result->gestao </td>
        <td> $result->email </td></tr>";
    } 
    echo '<tr > <td colspan="5";> <a href="index.php"> Voltar </a> </td> </tr>
    </table>
    </div>';
} catch (PDOException $e) {
    echo utf8_encode($e->getMessage());
}
?>