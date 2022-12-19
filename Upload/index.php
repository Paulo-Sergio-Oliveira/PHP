<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de Diretórios e Upload de Arquivos</title>
</head>
<body>
    <h2>Sistema de Upload de Arquivos</h2>
    <form enctype="multipart/form-data" action="upload.php" method="POST">
        <p>Nome do Diretório <input type="text" name="diretorio"></p>
        <p>Nome do Arquivo <input type="text" name="nome"></p>
        <p><input name="userfile" type="file" /></p>
        <p><button type="submit">Enviar Arquivo</button></p>
    </form>
</body>
</html>