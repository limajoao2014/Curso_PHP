<div class="titulo">Multidimensionais</div>
<?php
$dados = [
    [
    "nome" => "Roberto",
    "idade" => 26,
    "naturalidade" => "Ferraz de Vasconcelos"
    ],
    [
    "nome" => "Maria",
    "idade" => 25,
    "naturalidade" => "Bahia"
    ],
];


print_r($dados);

echo '<br>' . $dados[0] ['idade'];
echo '<br>' . $dados[1] ['idade'];

$dados [] = [
    'nome' => 'Florinda',
    'idade' => 38,
    'naturalidade' => 'Cidade do México'

];
echo '<br>';
print_r($dados);

echo '<br>' . $dados[2]['idade'];

$dados[2]['vizinhos'] = "Chaves";
echo '<br>';
print_r($dados);

unset($dados[1]);
echo '<br>';
print_r($dados);


?>