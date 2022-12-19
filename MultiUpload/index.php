<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
	<title>Multi Upload</title>
</head>
<body>
  <form action="upload.php" method="post" enctype="multipart/form-data">
  	<input type="file" name="arquivo[]" multiple="true">
  	<button type="submit"> Fazer upload </button>
  </form>
</body>
</html>