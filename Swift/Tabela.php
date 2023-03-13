<?php
include_once('Connect.php');
include_once('Crud.php');

$obj = new Crud($conn);
$cad = $obj->getAllCad();
$log = $obj->getAllLog();

echo "<link rel='stylesheet' type='text/css' href='Bootstrap/css/bootstrap.min.css'>";
echo "<link rel='stylesheet' type='text/css' href='Bootstrap/css/style.css'>";
echo "<div align='center'>";
echo "<table border='1' class='table table-bordered control'>";
echo "<tr> <th> ID </th> <th> Nome </th> <th> Idade </th> <th> E-mail </th> <th> Data de Nascimento </th> 
<th> CPF </th> <th> Usuário </th> <th> Senha </th> <th> Editar </th> <th> Excluir </th></tr>";
foreach ($cad as $info) {
    echo "<tr><td>".$info['id']."</td>
    <td>".$info['nome']."</td>
    <td>".$info['idade']."</td>
    <td>".$info['email']."</td>
    <td>".$info['data_nasc']."</td>
    <td>".$info['cpf']."</td>";
}
foreach ($log as $info) {
    echo "<td>".$info['usuario']."</td>
    <td>".$info['senha']."</td>
    <td><a href=FormUp.php?id=".$info['id']."><img class='icone' src='Imgs/lapis.png'></a></td>
    <td><a href=Delete.php?id=".$info['id']."><img class='icone' src='Imgs/lixeira.png'></a></td></tr>";
}
echo "</table>";