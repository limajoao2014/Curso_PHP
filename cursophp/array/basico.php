<div class="titulo">Arrays</div>

<?php
$lista = array(1,2, 3.4, "texto");
echo $lista. "<br>";
$lista[0] = 1234;
print_r($lista);

echo '<br>'. $lista[0];
echo '<br>'. $lista[1];
echo '<br>'. $lista[2];
echo '<br>'. $lista[3];
echo "<br>";
var_dump($lista[180]);

$texto = 'Esse texto é um teste';
echo '<br>' . $texto[0];
echo '<br>' . $texto[1];
echo '<br>' . $texto[2];
echo '<br>' . mb_substr($texto, 11, 1);

?>



