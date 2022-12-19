<?php
$garagem = scandir("Cômodos/Garagem");
array_shift($garagem);
array_shift($garagem);
foreach($garagem as $linha){
    fopen("Cômodos/Garagem/$linha",'a');
    unlink("Cômodos/Garagem/$linha");
}
rmdir("Cômodos/Garagem");
echo 'Garagens excluídas com sucesso!
<form enctype="multipart/form-data" action="Galeria.php" method="POST">
<button type="submit">Retornar</button>
</form>
<form enctype="multipart/form-data" action="index.php">
<button type="submit">Adicionar Novas Imagens</button>
</form>';