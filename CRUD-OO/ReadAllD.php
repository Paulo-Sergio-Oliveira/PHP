<?php
include_once('Connect.php');
include_once('Crud.php');

$obj = new Crud($conn);

$obj->readInfo();
$dado = $obj->getAll();

echo "<link rel='stylesheet' type='text/css' href='Bootstrap/css/bootstrap.min.css'>";
echo "<link rel='stylesheet' type='text/css' href='Bootstrap/css/style.css'>";
echo "<div align='center'>";
echo "<table border='1' class='table table-bordered control'>";
echo "<tr><th> Nome </th> <th> Idade </th> <th> E-mail </th> <th> Data</th> <th> Excluir</th></tr>";
foreach($dado as $info) {
echo "<tr><td>".$info['nome']."</td>
    <td>".$info['idade']."</td>
    <td>".$info['email']."</td>
    <td>".$info['data_now']."</td>
    <td><a href=Delete.php?id=".$info['id']."><img class='icone' src='Imgs/lixeira.png'</a></td>
    </tr>";
}
echo "</table>";
echo "<a href='Index.html'><button type='button' class='btn btn-primary btn-dark'>Voltar</button> </a>";