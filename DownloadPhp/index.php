<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Sistema de Download de Arquivos </title>
</head>
<body>
	<header>
		<h1>Sistema de Download de Arquivos</h1>
	</header>
	<hr>
		<section>
			<?php 
			   $path = "files"; 
			   $files = dir($path);

			   while($f = $files->read()){
					// "$f <br>";
					if(!is_dir($f)){  // retira os pontinhos  '.' e '..'
					echo $f." - "; // imprime os nomes dos arquivos da pasta
					echo "<a href='download.php?file=$path/$f'>Baixar Arquivo</a><br>"; 
					 }
			   }
			?> 
		</section>
		<hr>
	<footer>
		EEEP Amélia &copy; - Todos os direitos reservados
	</footer>
</body>
</html>