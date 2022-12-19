<?php
$dir1 = 'Cômodos';
$dir2 = $_POST['diretorio'];
if(is_dir($dir1)){
}else{
    mkdir('Cômodos');
}
if(is_dir("$dir1/$dir2")){
}else{
    mkdir("$dir1/$dir2");
}
$nomeFile1 = $_POST['diretorio'].'1';
$nomeTemp1 = $_FILES['imagem1']['tmp_name'];
$nomeF1 = $_FILES['imagem1']['name'];
$parInfo1 = pathinfo($nomeF1);
$ext1 = $parInfo1['extension'];
if($ext1 == "jpg"){
    $ctrl1 = move_uploaded_file($nomeTemp1, "$dir1/$dir2/$nomeFile1.$ext1");
}elseif($ext1 == "png"){
    $ctrl1 = move_uploaded_file($nomeTemp1, "$dir1/$dir2/$nomeFile1.$ext1");
}elseif($ext1 == "jpeg"){
    $ctrl1 = move_uploaded_file($nomeTemp1, "$dir1/$dir2/$nomeFile1.$ext1");
}else{
    $ctrl1 = FALSE;
}
if($ctrl1){
    echo "Upload da Imagem 1 Realizado Com Sucesso!<br>";
}else{
    echo "Tipo do Primeiro Arquivo Incompatível<br>";
    echo "Upload da Imagem 1 Não Realizado<br>";
}
$nomeFile2 = $_POST['diretorio'].'2';
$nomeTemp2 = $_FILES['imagem2']['tmp_name'];
$nomeF2 = $_FILES['imagem2']['name'];
$parInfo2 = pathinfo($nomeF2);
$ext2 = $parInfo2['extension'];
if($ext2 == "jpg"){
    $ctrl2 = move_uploaded_file($nomeTemp2, "$dir1/$dir2/$nomeFile2.$ext2");
}elseif($ext2 == "png"){
    $ctrl2 = move_uploaded_file($nomeTemp2, "$dir1/$dir2/$nomeFile2.$ext2");
}elseif($ext2 == "jpeg"){
    $ctrl2 = move_uploaded_file($nomeTemp2, "$dir1/$dir2/$nomeFile2.$ext2");
}else{
    $ctrl2 = FALSE;
}
if($ctrl2){
    echo "Upload da Imagem 2 Realizado Com Sucesso!<br>";
}else{
    echo "Tipo do Segundo Arquivo Incompatível<br>";
    echo "Upload da Imagem 2 Não Realizado<br>";
}
$nomeFile3 = $_POST['diretorio'].'3';
$nomeTemp3 = $_FILES['imagem3']['tmp_name'];
$nomeF3 = $_FILES['imagem3']['name'];
$parInfo3 = pathinfo($nomeF3);
$ext3 = $parInfo3['extension'];
if($ext3 == "jpg"){
    $ctrl3 = move_uploaded_file($nomeTemp3, "$dir1/$dir2/$nomeFile3.$ext3");
}elseif($ext3 == "png"){
    $ctrl3 = move_uploaded_file($nomeTemp3, "$dir1/$dir2/$nomeFile3.$ext3");
}elseif($ext3 == "jpeg"){
    $ctrl3 = move_uploaded_file($nomeTemp3, "$dir1/$dir2/$nomeFile3.$ext3");
}else{
    $ctrl3 = FALSE;
}
if($ctrl3){
    echo "Upload da Imagem 3 Realizado Com Sucesso!<br>";
}else{
    echo "Tipo do Terceiro Arquivo Incompatível<br>";
    echo "Upload da Imagem 3 Não Realizado<br>";
}
echo '<form enctype="multipart/form-data" action="index.php">
<button type="submit">Retornar</button>
</form>';
echo '<form enctype="multipart/form-data" action="Galeria.php" method="POST">
<button type="submit">Avançar</button>
</form>';