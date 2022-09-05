<?php
extract($_POST);
$file = fopen("Cadastro/$id.txt", 'a+');
fwrite($file, "Id: $id\nNome: $nome\nCargo: $cargo\n");
$texto = file("Cadastro/$id.txt");
// foreach($texto as $linha){
//     echo "$linha <br>";
// }
$arquivo = scandir('Cadastro');
array_shift($arquivo);
array_shift($arquivo);
var_dump($arquivo);
fclose($file);
?>