<div class="titulo">Variáveis</div>

<?php

//para criar um avariavel só precisa colocar o simbolo de dolar
$numeroA = 13;
echo $numeroA;
echo '<br>';
var_dump($numeroA);
echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;
echo '<br>';
echo isset($soma);

unset($soma);
echo '<br>';
echo !isset($soma);
echo '<br>';
var_dump($soma);

$peixe = 10;
echo '<br>' . $peixe;
$peixe = "baiacu";
echo '<br>' . $peixe;

// Nomes de Variáveis (escolher somente um tipo de padrão de declaração de variável)
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida';//Não recomendada
//$6var = 'invalida';
//$%var8 = 'invalida';
//$var8% = 'invalida';
echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);