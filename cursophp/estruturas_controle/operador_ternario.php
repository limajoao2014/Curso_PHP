<div class="titulo">Operador ternario</div>

<?php
$idade = 4;
$status;

if($idade>= 18){
    $status = 'Maior de Idade';
}else{
    $status = 'Menor de Idade';
}

echo "$status<br>";
$idade = 18;
$status = $idade >= 18 ? 'Maior de Idade' :'Menor de Idade';

echo "$status<br>";