<?php
    //Variáveis
    $nome = "Paulo Sergio";
    $idade = '16';
    $veiculo = "carro";

    //Variáveis de variáveis
    $carro = "Lamborghini";

    //Concatenar
    echo "O meu nome é ".$nome.". <br> Tenho ".$idade." anos. <br>"."Sempre dou uma volta no meu ".$veiculo.
    " que é uma ".$$veiculo.".";

    //Comparar valores
    //==(igual) !=(diferente) >=(maior igual) <=(menor igual) >(maior) <(menor) ===(totalmente igual) !==(totalmente diferente)
    if($idade == 16){
        echo "<br> Sua idade está correta!";
    }else{
        echo "<br> Sua idade está incorreta!";
    }

    if($idade === 16){
        echo "<br> Sua idade é do tipo number!";
    }else{
        echo "<br> Sua idade é do tipo string!";
    }

    if($idade >= 18){
        echo "<br> Você é maior de idade!";
    }else{
        echo "<br> Você é menor de idade!";
    }

    //Looping
    for($i = 10; $i >= 0; $i--){
        if($i == 0){
            echo "<br>".$i."<br> Acabou!";
        }else{
            echo "<br>".$i;
        }
    }

    $i = 0;
    while($i <= 10){
        if($i == 10){
            echo "<br>".$i."<br> Acabou!";
        }else{
            echo "<br>".$i;
        }
    $i++;
    }

    //Funções
    function printNome($n){
        echo "<br> O nome dele é ".$n.".";
    }
    printNome("Thierry");

    //Arrays
    $vetor = array('Paulo', 'Herick', 'Vinicio', 'Thierry');

    //Objetos
    class Pessoa{
        public $nome;
        public $idade;

        public function __construct($nome,$idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function printNomeEIdade(){
            echo "<br> O nome dele é ".$this->nome.". <br>";
            echo "Ele tem ".$this->idade." anos.";
        }
    }
    $pessoa = new Pessoa("Vinicio","16");
    $pessoa->printNomeEIdade();
?>
