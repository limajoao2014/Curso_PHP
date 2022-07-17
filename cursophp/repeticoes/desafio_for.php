<div class="titul">Desafio For</div>

<!--
Usar for...
#
##
###
####
#####

1) pode usar incremento $++
2) não pode usar incremento $++
-->

<?php

$arr = ['#','##','###','####','#####'];
for($i = 0; $i <= count($arr);$i++){
    echo "{$arr[$i]} <br>";
}
echo'<hr>';
#sem incremento


for($impre = '#'; $impre !=='######';$impre .= '#'){
    echo "$impre<br>";
}