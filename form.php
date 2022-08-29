<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style type="text/css">
    </style>
</head>
<body>
    <form method="post" action="valida.php">
        <p>Funcionário: <input type="text" name="funcionario"> </p>
        <p>Salário: <input type="number" name="salario"> </p>
        <p>Filhos: <input type="radio" name="filhos" value="Sim">Sim
                   <input type="radio" name="filhos" value="Não">Não</p>
        <p><b>Cursos Profissionalizantes</b></p>
        <p>Eletricista <input type="checkbox" name="eletro"> </p>
        <p>Encanador <input type="checkbox" name="encana"> </p>
        <p>Frentista <input type="checkbox" name="frenti"> </p>
        <p>Informática <input type="checkbox" name="inform"> </p>
        <p>Campos:
            Futebol <input type="checkbox" name="F">
            Rugby <input type="checkbox" name="R">
        </p>
        <p> <button type="submit"> Gravar Dados </button> </p>
    </form>
</body>
</html>