<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="" method="post">
        <p>Nome: <input type="text" name="nome"></p>
        <p>Idade: <input type="number" name="idade"></p>
        <button type="submit" name="sub"> Validar </button>
    </form>
    <?php
    if(isset($_POST['sub'])){
        //$nome = $_POST['nome'];
        //$idade = $_POST['idade'];
        extract($_POST);
        echo "Nome: $nome <br>
              Idade: $idade anos <br>";
        var_dump($_POST);
        //$post['post']='Paulo';
        //$post['idade']='17';
       // var_dump($post);
    }
    ?>
</body>
</html>