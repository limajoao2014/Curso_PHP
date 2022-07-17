<div class="titulo">Foreach</div>


<?php

$arr = [1=>'Domingo','Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta','Sabado'];

foreach($arr as $valor){
    echo  "$valor  <br>";
}

foreach($arr as $indice =>$valor){
    echo "$indice => $valor <br>";
}

$numeros = [1,2,3,4,5];

foreach ($numeros as &$dobrar) {
    $dobrar *=2;
    echo "$dobrar <br>";
}
print_r($numeros);

?>