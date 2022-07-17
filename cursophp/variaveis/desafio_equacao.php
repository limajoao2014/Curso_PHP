<div class="titulo">Desafio Equação</div>

<?php
$_quad = 2;
$_terc = 3;
$_numerador_A = 6 * (3 + 2);
$_numerador_B = (1-5)*(2-7);
$denominador_A = 3*2;
$denominador_C = 10;

echo (((($_numerador_A ** $_quad) / $denominador_A) - (($_numerador_B / $_quad)**$_quad))**$_terc)/ ($denominador_C**$_terc);