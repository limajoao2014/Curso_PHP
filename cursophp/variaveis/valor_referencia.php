<div class="titulo">Valor X Referência</div>

<?php
//Atribuição por valor
$var = 'Valor inicial';
echo $var;
$variavelValor = $var;
echo "<br> $variavelValor";
$variavelValor = 'novo valor';
echo "<br> $variavelValor";

//Atribuição por Referencia
$variavelRef = &$var;
$variavelRef = 'mesma referencia';

echo "<br> $var";
echo "<br>  $variavelRef";
