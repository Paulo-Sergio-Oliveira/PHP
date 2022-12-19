<?php
$banheiro = scandir("Cômodos/Banheiro");
array_shift($banheiro);
array_shift($banheiro);
foreach($banheiro as $linha){
    fopen("Cômodos/Banheiro/$linha",'a');
    unlink("Cômodos/Banheiro/$linha");
}
rmdir("Cômodos/Banheiro");
echo 'Banheiros excluídos com sucesso!
<form enctype="multipart/form-data" action="Galeria.php" method="POST">
<button type="submit">Retornar</button>
</form>
<form enctype="multipart/form-data" action="index.php">
<button type="submit">Adicionar Novas Imagens</button>
</form>';