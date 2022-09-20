<?php

//variaveis

/*$nome = "Eduardo";
$idade = 21;
$altura = 1.86;

echo "Meu nome é $nome, minha idade é $idade anos e minha altura é $altura.";*/

/*$nome = "Gabriel";
if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;*/  

/*
$nome = 123;
var_dump($nome);
if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;  
echo "<hr>";*/

/*$nome = 'eduardo';
echo 'meu nome é ' .$nome. ' \'rodrigues\'';*/

// contantes

/*define ("NOME" , "Eduardo rodrigues"); //ESCREVER EM MAIÚSCULO AS CONSTANTES
echo NOME;

echo "<hr>";*/

//array 

/*$carros = array("bmw", "ford", "fiat");
$carros[3] = "golf";  //adicionando item na array
echo $carros[3];

echo"<hr>";

echo count ($carros);

echo"<hr>";

foreach ($carros as $tt){
    echo $tt. "<br>";
}

echo "<hr>";

$pessoa = array ("nome"=>"Eduardo", "filho"=>"Gabriel");
echo $pessoa{"nome"};*/


//CONDICIONAIS

$numero = 7;
if($numero == 10):
    echo  "É igual a 10";

elseif($numero <= 9):
        echo "É menor que 10";

else: 
    echo "É diferente de 10";

endif;  
echo "<hr>";

$média = 6;
echo($média >= 7) ? "aprovado!" : "Reprovado";
echo "<hr>";

$cor = "verde";

switch ($cor):
    case "vermelho":
        echo "Sua cor preferida é vermelho";
        break;
    case "azul":
        echo "Sua cor preferida é azul";
        break;

        default:
        echo "Você não tem cor preferida";
endswitch;
echo "<hr>";

echo 10 +10;

$a = 10;
$b = 12;
echo "<hr>";

$soma = $b - $a;  // pode ser todos os operadores aritimeticos  
echo $soma;




















