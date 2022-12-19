<style type="text/css">
   td{
    text-align: center;
    background-color: aquamarine;
   } 
</style>
<?php 
$estagio = array("Manutenção","Design","Programação","Serviços de Informática"); //Array com índice implícito
                   // 0          1           2                 3
$estagio2 = array(
	0 => "Manutenção",
	1 => "Design",
	2 => "Programação",
	3 => "Serviços de Informática"
   ); // Array com índice explícito

var_dump($estagio2); // Mostra o Array completo

$size = count($estagio2); // Mostra o tamanho do Array
echo "Tamanho: $size"; // 4
echo "<br>";
echo "Posição 0: $estagio2[0]"; // Item da posição 0
echo "<br>";
echo "<br>";

for($i=0; $i < $size ; $i++) { 
  echo "Posição $i: $estagio[$i]"."<br>";
} // Maneira de mostrar os elementos do Array com estrtura de repetição For
echo '<br>';

foreach($estagio as $index => $linha){
  echo "Posição $index: $linha <br>";
} // Maneira de mostrar os elementos do Array com estrtura de repetição Foreach
echo "<br>"; 

echo "<table border='1'"; 
for($i=0; $i < $size ; $i++) { 
	echo "<tr><td>Posição $i</td><td>$estagio[$i]</td></tr>";
}

echo "</table>"; // Tabela do Array utilizando For
echo "<br>"; 

echo "<table border='1'"; 
foreach($estagio as $index => $linha){
    echo "<tr><td>Posição $index</td><td>$linha</td></tr>";
}
echo "</table>";// Tabela do Array utilizando Foreach
echo "<br>";

$newArray = array(); // Array vazio
$newArray[0]=10; // Novo valor do vetor
for($i=0; $i < 20; $i++){
    $newArray[] = $i;
}
var_dump($newArray);

// Array associativo
$dadosClientes = array(
                       "Nome" => "Maria Clara",
                       "CPF" => "087.883.456-18",
                       "RG" => "200608910711-7",
                       "Idade" => 55, 
                       "Altura" => 1.75
                      );

var_dump($dadosClientes); 

echo "RG do Cliente: ".$dadosClientes["RG"]."<br>"; // Mostra valores da determinada posição
echo "Idade do Cliente: ".$dadosClientes["Idade"]."<br>"; 
echo "Nome do Cliente: ".$dadosClientes["Nome"]."<br>";

 echo "<br>"; 
//Mostra somente os valores
foreach($dadosClientes as $value) {
	echo $value."<br>"; 
}
echo "<br>"; 
//Mostra chaves e valores
 foreach($dadosClientes as $key => $value) {
 	echo $key." - ".$value."<br>";
 }

/* Arrays multidimensionais ou Matrizes, são estruturas onde se tem um array vinculado a outros, 
na maior parte das vezes usamos duas dimensões, representando tabelas(Linhas e Colunas) */
$clientes = array(
  "José" => array("Idade"=>25,"CPF"=>"087.883.456-18","RG"=>"200608910711-7"), 
  "Maria" => array("Idade"=>18,"CPF"=>"057.825.456-15","RG"=>"200108909711-2"),
  "Ana" => array("Idade"=>24,"CPF"=>"037.825.445-30","RG"=>"201908909711-8") 
);

var_dump($clientes);

echo "<hr>"; 

echo "CPF da Cliente Maria - ".$clientes["Maria"]["CPF"]."<br>";
echo "RG da Cliente Ana - ".$clientes["Ana"]["RG"]."<br>";
echo "<hr>"; 

foreach($clientes as $clients => $dados){
    echo "Cliente: $clients <br>";
    foreach($dados as $key => $values){
        echo $key." - ".$values."<br>";
    } 
}
echo "<br>";
?>

<?php 
echo "<table border='1'>"; 
foreach($clientes as $clients => $dados){
    echo "<tr><td colspan='2'> $clients </td></tr>";
    foreach($dados as $key => $values){
    echo "<tr><td> $key </td><td> $values </td></tr>";
  } 
}
echo "</table>";

/* Crie uma matriz que possa agrupat as informações dos três cursos do Amélia, organize esses dados de modo
a destacar, nome dos cursos, as turmas de cada curso e número de alunos de cada turma */
$Amelia = array(
  "1° ano" => array("Informática"=>array("Alunos"=>41),"Administração"=>array("Alunos"=>40),"Enfermagem"=>array("Alunos"=>39)), 
  "2° ano" => array("Informática"=>array("Alunos"=>41),"Administração"=>array("Alunos"=>40),"Enfermagem"=>array("Alunos"=>39)),
  "3° ano" => array("Informática"=>array("Alunos"=>41),"Administração"=>array("Alunos"=>40),"Enfermagem"=>array("Alunos"=>39))
);

var_dump($Amelia);

foreach ($Amelia as $serie => $cursos) {
  echo "Série: $serie<br>"; 
  foreach($cursos as $curso => $valor){
    echo "Curso: $curso<br>";
    foreach($valor as $quantidade){
      echo "Quantidade de Alunos: $quantidade<br>";
    }
  }
}

echo "<br>";
echo "<table border='1'>"; 
foreach($Amelia as $serie => $cursos) {
    echo "<tr><td colspan='2'>$serie</td></tr>"; 
   foreach($cursos as $curso => $valor){
     echo "<tr><td colspan='2'>$curso</td></tr>";
     foreach($valor as $quantidade){
      echo "<tr><td>Quantidade</td> <td>$quantidade</td> </tr>";
    }
   }
}
echo "</table>";
?>

<?php
echo "<hr>"; 
$numeros = array(
                 0 => array(8,9,6,9),
                 1 => array(6,4,10,15),
                 2 => array(5,9,0,10)
               ); 

echo $numeros[1][3]."<br>";
echo $numeros[2][2]."<br>";

echo "<br>";

foreach ($numeros as $numbers => $vetor) {
   echo "Vetor: $numbers<br>"; 
   foreach($vetor as $key => $valor){
     echo $key." - ".$valor."<br>";
   }
}

echo "<br>";
echo "<table border='1'>"; 
foreach($numeros as $numbers => $vetor) {
    echo "<tr><td colspan='2'>$numbers</td></tr>"; 
   foreach($vetor as $key => $valor){
     echo "<tr><td>$key</td> <td>$valor</td> </tr>";
   }
}

echo "</table>"; 
$clientes2["Maria"]["RG"] = "2005089107117";
$clientes2["Maria"]["CPF"] = "040825445-56";
var_dump($clientes2);
?>