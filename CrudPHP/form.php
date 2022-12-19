<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserção de Registro</title>
    <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
</head>

<body>
    <section>
        <div class="container" style="margin-top: 20px;">
        <header> <h2>Novo Registro</h2> </header>
            <form method="POST" action="insert.php">
                <div class="mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Professor</span>
                    <input autofocus type="text" name="prof" class="form-control" placeholder="Nome completo do Professor" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>
                <div class="mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Serviços Gerais</span>
                    <input type="text" name="servgerais" class="form-control" placeholder="Nome completo do membro dos Serviços Gerais" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>
                <div class="mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Gestão</span>
                    <input type="text" name="gestao" class="form-control" placeholder="Nome completo do membro da Gestão" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>
                <div class="mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-lg">E-mail</span>
                    <input type="email" name="email" class="form-control" placeholder="Exemplo@gmail.com" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                    <div id="emailHelp" class="form-text">Nenhuma das informações desse registro serão compartilhadas.</div>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a href="index.php"><button type="button" class="btn btn-primary">Voltar</button> </a>
            </form>
        </div>
        <div class='container'></div>
    </section>
    <script src="Bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>