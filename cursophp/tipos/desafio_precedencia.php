<div class="titulo">Desafio Precedência</div>

<?php

echo '<p> 1 .Qual o Valor será impresso?</p>';

try{
echo 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3);
}catch(DivisionByZeroError $e){
    echo "INF";
}

echo '<p> 2. Qual expressão imprime o valor 100?</p>';
echo 'a)',(1 + 2 ) * 20 - 15;
echo '<br>';
echo 'b)', 4 * 5 ** 2;
echo '<br>';
echo 'c)',2 ** 3 ** 4 / 1e25;
echo '<br>';
echo 'd)',3 + (3*8) / 2 - 3;
echo '<br>';