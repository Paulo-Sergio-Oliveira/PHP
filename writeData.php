<?php
extract($_POST);
$file = fopen('texto.txt', 'a+');
fwrite($file, "Aluno: $aluno\nNota: $nota\n");
$texto = file('texto.txt');
foreach($texto as $linha){
    echo "$linha <br>";
}
fclose($file);