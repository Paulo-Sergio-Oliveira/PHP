<?php
$quartos = scandir("Cômodos/Quarto");
array_shift($quartos);
array_shift($quartos);
foreach($quartos as $linha){
    fopen("Cômodos/Quarto/$linha",'a');
    unlink("Cômodos/Quarto/$linha");
}
rmdir("Cômodos/Quarto");
echo 'Quarto excluídos com sucesso!
<form enctype="multipart/form-data" action="Galeria.php" method="POST">
<button type="submit">Retornar</button>
</form>
<form enctype="multipart/form-data" action="index.php">
<button type="submit">Adicionar Novas Imagens</button>
</form>';