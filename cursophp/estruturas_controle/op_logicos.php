<div class="titulo">Operadores Lógicos</div>

<?php
echo"<p class='divisao'>V ou F</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true);//not um operador unario
echo '<br>';

echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true);
echo '<br>';
var_dump(true && false);
echo '<br>';
var_dump(false && true);
echo '<br>';
var_dump(false && false);
echo '<br>';
var_dump(false && false);
echo '<br>';
//Utilizando o and
var_dump(true and true);
echo '<br>';
var_dump(true and false);
echo '<br>';
var_dump(false and true);
echo '<br>';
var_dump(false and false);
echo '<br>';
var_dump(false and false);
echo '<br>';

echo "<p class='divisao'>Tabela Verdade do 'OR' (ou)</p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false||true);
var_dump(false||false);
var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);


echo "<p class='divisao'>Tabela Verdade 'XOR' (ou exclusivo)</p><hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);
var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 69;
$sexo = 'F';
$pagouPrevidencia = true;
$criterioHomem = ($idade>=65 && $sexo = 'M');
$criterioMulher = ($idade>=65 && $sexo = 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aposentar ->$podeAposentar .<br>";

if($idade>=60 && $sexo === 'F'){
    echo "Pode se aposentar ->$sexo";
}elseif($idade >= 65 && $sexo === 'M'){
    echo "Pode se aposentar -> $sexo";
}else{
    echo "Vai trabalhar mais um pouco...";
}


