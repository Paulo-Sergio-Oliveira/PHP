<?php
 session_start();
 if (isset($_SESSION['id'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso Restrito</title>
</head>
<body>
    <section> <h1> Conteúdo da Página </h1> </section>
    <?php echo 'Usuário: '.$_SESSION['user'].'<br>
    Nome: '.$_SESSION['nome'].'<br>
    Idade: '.$_SESSION['idade'].'<br>
    Data de Nascimento: '.$_SESSION['data_nasc'].'<br>
    E-mail: '.$_SESSION['email'].'<br>
    CPF: '.$_SESSION['cpf'];?>
    <p> <a href='LogOff.php'> Sair </p>
</body>
</html>
<?php

}else{
    echo 'Acesso Negado.';
}
?>