<div class="titulo">Desafio Impressão</div>


<?php
$arr = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

echo "Usando o For <br><hr>";
for ($i=0; $i <count($arr) ; $i++) { 
    if($i % 2 !== 0){
        continue;
    }
 echo "{$arr[$i]}<br>";
}

echo "<br>Usando o Foreach<br><hr>";
foreach($arr as $chave => $valor){

    if($chave % 2 !==0){continue;}
    echo"$valor <br>";
}