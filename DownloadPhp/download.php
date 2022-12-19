<?php
$file = $_GET["file"];

$infoFile  = pathinfo($file); 

$ext = $infoFile["extension"]; 

$extBloq = array("php","html","htm","css","js","exe"); 

// var_dump($infoFile); 

if(!in_array($ext,$extBloq)){

	    $tipo =  mime_content_type($file); 

        // informa o tipo do arquivo ao navegador
		header("Content-Type: ".$tipo); 

		// informa o tamanho do arquivo ao navegador
		header("Content-Length: ".filesize($file)); 

		// informa ao navegador que é tipo anexo e faz abrir a janela de download, tambem informa o nome do arquivo
		header("Content-Disposition: attachment; filename=".basename($file)); 

		// lê o arquivo, forçando o Download
		readfile($file);
		 
		exit; // aborta pós-ações 
     
}else{
	echo "Extensão não permitida!"; 
}
?>