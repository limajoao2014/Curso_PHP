<div class="titulo">Desafio string</div>

<?php
echo strpos('!ABCaBcabca', 'abc') , '<br>';
echo stripos('!ABCaBcabca', 'abc') , '<br>';
echo stripos(strtolower('!ABCaBcabca'), 'abc') , '<br>';
