<div class="titulo">Variáveis variáveis</div>
<?php
$a = 'valorA';
$$a = 'valorAA';
echo "$a {$$a}";

echo '<br>';
$epa='opa';
$opa = 'vish';
$vish = "eita!!!";
echo "$epa {$$epa} {$$$epa}";
