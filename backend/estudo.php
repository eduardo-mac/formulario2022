<?php

//variaveis

/*$nome = "Eduardo";
$idade = 21;
$altura = 1.86;

echo "Meu nome é $nome, minha idade é $idade anos e minha altura é $altura.";

$nome = "Gabriel";
if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;


$nome = 123;
var_dump($nome);
if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;  
echo "<hr>";

$nome = 'eduardo';
echo 'meu nome é ' .$nome. ' \'rodrigues\'';

// contantes

define ("NOME" , "Eduardo rodrigues"); //ESCREVER EM MAIÚSCULO AS CONSTANTES
echo NOME;

echo "<hr>";

//array 

$carros = array("bmw", "ford", "fiat");
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
echo $pessoa{"nome"};


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

echo "<hr>";

$valor = 20;

echo ++$valor;

echo "<hr>";

$a = 10;
$b = 15;

$a += $b; // é igual a $a = $a + $b;
echo $a;

if(10 <> 10):
    echo "POSITIVO";
else:
    echo "NEGATIVO";
endif;

$idade = 25;
$nome = "Eduardo";

if (($idade == 25) and ($nome == "Eduardo")):
    echo "Verdadeiro";
else:
    echo "falso";
endif;

$contador = 1;

while ($contador <= 10): //while quer dizer enquanto.
    echo "Seu número é $contador <br>";
    $contador++;
endwhile;

$valor = 124500;

$format = number_format($valor, 2, ",", ".");
echo "o valor do produto é $format"; 

function exibirnome(){
    echo "Eduardo";
}

exibirnome();


function mediaAluno($nome, $n1, $n2, $n3){
    $media = ($n1 + $n2 + $n3) /3;
    if($media >= 7):
        echo "$nome foi aprovado com média $media";
    else:
        echo "$nome foi reprovado com média $media";
    endif;    
}

mediaAluno("Eduardo", 8, 9, 6);*/

$nome = $_POST['nome'];
$email = $_POST['email'];
echo "Seu nome é $nome e seu email é $email";



















