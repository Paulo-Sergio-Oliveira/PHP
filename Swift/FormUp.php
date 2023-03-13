<?php
$id = $_GET['id'];

include_once('Connect.php');
include_once('Crud.php');

$obj = new Crud($conn);
$dado = $obj->readInfo($id);
?>
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
<div class="container" style="margin-top: 20px;">
    <header> <h2>Novo Registro</h2> </header>
        <form method="POST" action="Update.php?id=<?=$dado->id;?>">
            <div class="mb-3">
                <span class="input-group-text" id="inputGroup-sizing-lg">Nome</span>
                <input autofocus type="text" value="<?=$dado->nome;?>" name="nome" class="form-control" placeholder="Insira o Nome aqui" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>
            <div class="mb-3">
                <span class="input-group-text" id="inputGroup-sizing-lg">E-mail</span>
                <input type="email" value="<?=$dado->email;?>" name="email" class="form-control" placeholder="Exemplo@gmail.com" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>
            <div class="mb-3">
                <span class="input-group-text" id="inputGroup-sizing-lg">Idade</span>
                <input type="number" value="<?=$dado->idade;?>" name="idade" class="form-control" placeholder="Insira a Idade aqui" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>
            <div class="mb-3">
                <span class="input-group-text" id="inputGroup-sizing-lg">Data de nascimento</span>
                <input type="date" name="data" value="<?=$dado->data_nasc;?>" class="form-control" placeholder="Insira sua data de nascimento aqui" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>
            <div class="mb-3">
                <span class="input-group-text" id="inputGroup-sizing-lg">CPF</span>
                <input type="text" name="cpf" value="<?=$dado->cpf;?>" class="form-control" placeholder="Insira seu cpf aqui" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>
            <button type="submit" class="btn btn-primary btn-dark">Alterar Dados</button>
            <a href="Tabela.php"><button type="button" class="btn btn-primary btn-dark">Voltar</button> </a>
        </form>
</div>