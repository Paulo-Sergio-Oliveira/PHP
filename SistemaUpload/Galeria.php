<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Imobiliária</title>
  </head>
  <body>
  <div class="container">
    <h1> <b>Imobiliária</b> </h1>
      <div class="row">
        <form enctype="multipart/form-data" action="index.php">
        <button type="submit">Adicionar Novas Imagens</button>
        </form>
        <div></div>
        <div class="col img1"></div>
        <div class="col img2"></div>
        <div class="col img3"></div>
        <div></div>
        <form enctype="multipart/form-data" action="deleteC.php" method="POST">
        <button type="submit">Excluir Cozinhas</button>
        </form>
      </div>
      <div class="row">
        <div></div>
        <div class="col img4"></div>
        <div class="col img5"></div>
        <div class="col img6"></div>
        <div></div>
        <form enctype="multipart/form-data" action="deleteQ.php" method="POST">
        <button type="submit">Excluir Quartos</button>
        </form>
      </div>
      <div class="row">
        <div></div>
        <div class="col img7"></div>
        <div class="col img8"></div>
        <div class="col img9"></div>
        <div></div>
        <form enctype="multipart/form-data" action="deleteG.php" method="POST">
        <button type="submit">Excluir Garagens</button>
        </form>
      </div>
      <div class="row">
        <div></div>
        <div class="col img10"></div>
        <div class="col img11"></div>
        <div class="col img12"></div>
        <div></div>
        <form enctype="multipart/form-data" action="deleteS.php" method="POST">
        <button type="submit">Excluir Salas</button>
        </form>
      </div>
      <div class="row">
        <div></div>
        <div class="col img13"></div>
        <div class="col img14"></div>
        <div class="col img15"></div>
        <div></div>
        <form enctype="multipart/form-data" action="deleteB.php" method="POST">
        <button type="submit">Excluir Banheiros</button>
        </form>
      </div>
    </div>
  </body>
</html>
<?php
if(is_dir("Cômodos/Cozinha")){
    $cozinha = scandir("Cômodos/Cozinha");
    array_shift($cozinha);
    array_shift($cozinha);
    $i = 1;
    foreach($cozinha as $linha){
    echo "<style>
        .img$i{
          background-image: url(Cômodos/Cozinha/$linha);
          }
          </style>";
    $i++;
    }
}else{
}
if(is_dir("Cômodos/Quarto")){
    $quarto = scandir("Cômodos/Quarto");
    array_shift($quarto);
    array_shift($quarto);
    $j = 4;
    foreach($quarto as $linha){
        echo "<style>
        .img$j{
          background-image: url(Cômodos/Quarto/$linha);
          }
          </style>";
        $j++;
    }
}
if(is_dir("Cômodos/Garagem")){
    $garagem = scandir("Cômodos/Garagem");
    array_shift($garagem);
    array_shift($garagem);
    $k = 7;
    foreach($garagem as $linha){
        echo "<style>
        .img$k{
          background-image: url(Cômodos/Garagem/$linha);
          }
          </style>";
        $k++;
    }
}
if(is_dir("Cômodos/Sala")){
    $sala = scandir("Cômodos/Sala");
    array_shift($sala);
    array_shift($sala);
    $l = 10;
    foreach($sala as $linha){
        echo "<style>
        .img$l{
          background-image: url(Cômodos/Sala/$linha);
          }
          </style>";
        $l++;
    }
}
if(is_dir("Cômodos/Banheiro")){
    $banheiro = scandir("Cômodos/Banheiro");
    array_shift($banheiro);
    array_shift($banheiro);
    $m = 13;
    foreach($banheiro as $linha){
        echo "<style>
        .img$m{
          background-image: url(Cômodos/Banheiro/$linha);
          }
          </style>";
        $m++;
    }
}
echo "<style>
.col{
border: 5px solid saddlebrown;
height: 200px;
margin: 5px;
position: relative;
background-size: cover;
}
.container{
text-align: center;
font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
h1{
font-size: 50px;
}";
?>