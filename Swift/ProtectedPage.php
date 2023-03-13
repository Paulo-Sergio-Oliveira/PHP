<?php
 session_start();
 if (isset($_SESSION['user'])) {
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
    <?php echo 'Logado como:'.$_SESSION['user'];?>
    <section> <h1> Conteúdo da Página </h1> </section>
    <p> <a href='LogOff.php'> Sair </p>
</body>
</html>
<?php

}else{
    echo 'Acesso Negado.';
}
?>