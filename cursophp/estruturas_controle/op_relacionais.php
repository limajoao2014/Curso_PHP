<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1==1);
echo"<br>";
var_dump(1>1);
echo"<br>";
var_dump(1>=1);
echo"<br>";
var_dump(4<23);
echo"<br>";
var_dump(1<=7);
echo"<br>";
var_dump(1!=7);
echo"<br>";
var_dump(1<>1);
echo"<br>";
var_dump(111=='111');
echo"<br>";
var_dump(111==='111');
echo"<br>";
var_dump(111!='111');
echo"<br>";
var_dump(111!=='111');
echo"<br>";

echo"<p class='divisao'>Relacionais no IF/Else</p><hr>";
$idade = 18;
if($idade < 18){
    echo "Menor de Idade = $idade anos <br>";
}elseif($idade <65){
    echo "Adulto = $idade anos<br>";
}else{
    echo "Terceira Idade = $idade anos!";
}



echo"<p class='divisao'>Spaceship</p><hr>";
var_dump(500 <=> 3 );
echo "<br>";
var_dump(50 <=> 50 );
echo "<br>";
var_dump(5<=>50);
echo"<p class='divisao'>Valores pode ser V ou F</p><hr>";
var_dump(!!5);
echo "<br>";
var_dump(!!0);
echo "<br>";
var_dump(!!"");
echo "<br>";
var_dump(!!" ");
?>
