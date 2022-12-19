<?php
$dir = $_POST['diretorio'];
if(is_dir($dir)){
}else{
    mkdir($dir);
}
$nomeTemp = $_FILES['userfile']['tmp_name'];
$nomeF = $_FILES['userfile']['name'];
$nomeFile = $_POST['nome'];
$parInfo = pathinfo($nomeF);
$ext = $parInfo['extension'];
$ctrl = move_uploaded_file($nomeTemp, "$dir/$nomeFile.$ext");
if($ctrl){
    echo "Upload Realizado";
}else{
    echo "Upload Não Realizado";
}