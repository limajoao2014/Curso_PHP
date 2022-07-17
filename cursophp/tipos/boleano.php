<div class="titulo">Tipo Booleano</div>

<?php
echo true;
echo '<br>';
echo false;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('False');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');


//Regras de converção

echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); //apenas o zero é false
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0000000001);
echo '<br>' . var_dump((bool) ""); //false
echo '<br>' . var_dump((bool) " ");//true
echo '<br>' . var_dump((bool) "0");//false
echo '<br>' . var_dump((bool) "00");//true
echo '<br>' . var_dump((bool) "false");//true

echo '<br>' . var_dump( !!"false");//true


