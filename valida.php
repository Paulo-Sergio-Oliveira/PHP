<?php
$nome = $_POST['funcionario'];
$salario = $_POST['salario'];
$filhos = $_POST['filhos'];
$cursos = '';
if(isset($_POST['eletro'])){
    $cursos .= '<br>Eletricista';
} if(isset($_POST['encana'])){
    $cursos .= '<br>Encanador';
} if(isset($_POST['frenti'])){
    $cursos .= '<br>Frentista';
} if(isset($_POST['inform'])){
    $cursos .= '<br>Informática';
}
if(empty($_POST['F'])){
    echo 'Campo não marcado <br>';
}
echo "Nome: $nome <br> 
      Salário: R$ $salario <br> 
      Possui Filhos: $filhos <br>
      Cursos: $cursos";