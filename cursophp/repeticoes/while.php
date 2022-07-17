<div class="titulo">While/Do-While</div>

<?php
const LIMITE = 10;
$contador = 0;

do{
    echo "Do-while $contador <br>";
    $contador++;

}while( $contador <= LIMITE);



$contador = 0;
while( $contador <= LIMITE){
    echo "while $contador <br>";
    $contador++;
};