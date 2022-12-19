<?php
var_dump($_FILES['arquivo']);
//echo $_FILES['arquivo']['name'][0];

$max = sizeof($_FILES['arquivo']['error']);

echo $max; 

for($i=0; $i < $max; $i++) { 
 	$tmpname = $_FILES['arquivo']['tmp_name'][$i];
 	$desnome = "../DownloadPhp/files/".$_FILES['arquivo']['name'][$i];

 	move_uploaded_file($tmpname,$desnome);
 }




























/*
$max = sizeof($_FILES['arquivo']['error']);

for ($i=0; $i < $max  ; $i++) { 
	echo $_FILES['arquivo']['tmp_name'][$i]."<br>";
	echo $_FILES['arquivo']['name'][$i]."<br>";
	move_uploaded_file($_FILES['arquivo']['tmp_name'][$i], "files/".$_FILES['arquivo']['name'][$i]);
}
*/
?>