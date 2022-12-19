<?php
$cozinha = scandir("Cômodos/Cozinha");
array_shift($cozinha);
array_shift($cozinha);
foreach($cozinha as $linha){
    fopen("Cômodos/Cozinha/$linha",'a');
    unlink("Cômodos/Cozinha/$linha");
}
rmdir("Cômodos/Cozinha");
echo 'Cozinhas excluídas com sucesso!
<form enctype="multipart/form-data" action="Galeria.php" method="POST">
<button type="submit">Retornar</button>
</form>
<form enctype="multipart/form-data" action="index.php">
<button type="submit">Adicionar Novas Imagens</button>
</form>';