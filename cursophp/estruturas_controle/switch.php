<div class="titulo">Switch</div>

<?php
$categoria = '';
$preco = 0.0;
$carro = '';

if($categoria === 'luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
}else if($categoria === 'SUV') {
    $carro = 'Renegade';
    $preco = 80000;
}elseif($categoria === 'sedan') {
    $carro = 'Etios';
    $preco = 55000;
}else{
    $carro = 'mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, '.', '.');
echo"<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";


$categoria = 'SEDAN';
switch(strtolower($categoria)){
    case 'Luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    
    
    case 'suv':
    case 'suv básico':
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'mobi';
        $preco = 33000;
        break;
}

$precoFormat = number_format($preco, 2, ',', '.');
echo"<p>Carro: $carro<br>Preço: R$ $precoFormat</p>";