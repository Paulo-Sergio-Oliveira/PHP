<?php
include_once('Connect.php');
include_once('Crud.php');

$usuario = $_POST['user'];
$obj = new Crud($conn);
$dados = $obj->getLogin(); 
foreach($dados as $login => $valores){
    if (password_verify($usuario,$valores->usuario)) {
        $dado = $obj->readInfo($valores->id);
    }else{
        echo 'Usuário Incorreto.';
    }
}
?>
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
<div class="container" style="margin-top: 20px;">
    <header> <h2>Nova Senha</h2> </header>
        <form method="POST" action="UpPass.php?id=<?=$dado->id;?>">
            <div class="mb-3">
                <span class="input-group-text" id="inputGroup-sizing-lg">Senha</span>
                <input autofocus type="text" name="pass" class="form-control" placeholder="Insira sua nova senha aqui" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>
            <button type="submit" class="btn btn-primary btn-dark">Alterar Senha</button>
            <a href="Usuario.php"><button type="button" class="btn btn-primary btn-dark">Voltar</button> </a>
        </form>
</div>