<?php
$dados = file("texto.txt");
//var_dump($dados);
$size = count($dados);
for($i=0; $i < $size; $i++) {
    echo "$dados[$i] <br>";
}