﻿<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elza", "Rapunzel","Branca de neve", "Cinderela"];

$alea = array_rand($nomes);
echo"<div center><h1> $nomes[$alea]</h1></div>";

?>
<style>
    [center]{
        display: flex;
        justify-content: center;
    }
</style>