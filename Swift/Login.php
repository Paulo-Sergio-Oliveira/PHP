<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='Bootstrap/css/bootstrap.min.css'>
    <title>Insert</title>
</head>
<body>
    <header>
        <div class="container" style="margin-top: 20px;">
        <header> <h2>Formulário de Login</h2> </header>
            <form method="POST" action="Valida.php">
                <div class="mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Usuário</span>
                    <input type="text" name="user" class="form-control" placeholder="Insira seu usuario aqui" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>
                <div class="mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Senha</span>
                    <input type="password" name="pass" class="form-control" placeholder="Insira sua senha aqui" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>
                <button type="submit" class="btn btn-primary btn-dark">Logar</button>
                <a href="Cadastro.php"><button type="button" class="btn btn-primary btn-dark">Cadastrar-se</button> </a>
                <a href="Usuario.php"><button type="button" class="btn btn-primary btn-dark">Esqueci Minha Senha</button> </a>
            </form>
        </div>
    </header>
</body>
</html>