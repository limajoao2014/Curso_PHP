<div class="titulo">Desafio Switch</div>
<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metro > Km</option>
        <option value="km-metro">Km > Metro</option>
        <option value="celsius-fahrenheit">Celsius > Fahrenheit </option>
        <option value="fahrenheit-celsius">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > *{
        font-size: 1.8rem;
    }
</style>



<?php

use LDAP\Result;

$num = $_POST['param'];
$conversos = $_POST['conversao'];
$result = '';

switch(strtolower($conversos)){
    case 'km-metro':{
        $result = $num*1000;
        $mensagem = "$num km em metro é $result";
        break;
    }
    case 'metro-km':{
        $result = $num/1000;
        $mensagem = "$num metros em Km é $result";
        break;
    }
    case 'km-milha':{
        $result = $num /0.621371;
        $mensagem = "$num km em milhas é $result";
        break;
    }
    case 'milha-km':{
        $result = $num * 0.621371;
        $mensagem = "$num milhas em Km é $result";
        break;
    }
    case "celsius-fahrenheit":{
        $result = $num *1.8 + 32;
        $mensagem = "$num Cº em fahrennheit é $result Fº";
        break;
    }
    case "fahrenheit-celsius":{
            $result = (($num-32)/1.8);
            $mensagem = "$num Fº em celsius é $result Cº";
            break;
    }
    default:
    $mensagem = "Não foi informado valores";
}

echo "<br>$mensagem";
?>