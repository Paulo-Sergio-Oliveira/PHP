<?php
$salas = scandir("Cômodos/Sala");
array_shift($salas);
array_shift($salas);
foreach($salas as $linha){
    fopen("Cômodos/Sala/$linha",'a');
    unlink("Cômodos/Sala/$linha");
}
rmdir("Cômodos/Sala");
echo 'Sala excluídas com sucesso!
<form enctype="multipart/form-data" action="Galeria.php" method="POST">
<button type="submit">Retornar</button>
</form>
<form enctype="multipart/form-data" action="index.php">
<button type="submit">Adicionar Novas Imagens</button>
</form>';