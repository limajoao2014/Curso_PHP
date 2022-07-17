<div class="titulo">Laço For</div>

<?php
for( $cont =1; $cont <=5; $cont++){
    echo "$cont <br>";
}
echo "<hr>";
for(;$cont <=10; $cont++){
    echo "$cont <br>";
}
echo "<hr>";
for(; $cont <=15; ){
    echo "$cont <br>";
    $cont++;
    
}

$arr = ['Domingo','Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta','Sabado'];

print_r($arr);
echo "<hr>";

for($i =0; $i < count($arr);$i++){
    echo "{$arr[$i]}<br>";

}

$matrix = [
    ["a","e","i","o","u"],
    ["b","c","d",]
];

for($i = 0; $i<count($matrix);$i++){
  for ($j = 0; $j <count($matrix[$i]); $j++) { 
    echo "{$matrix[$i][$j]} ";
  }
  echo "<br>";
}

foreach($matrix as $linha){
    foreach ($linha as $value) {
        echo "$value";
     
    }
    echo "<br>";
}

