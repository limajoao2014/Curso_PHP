<div class="titulo">Desafio Operadores Lógicos</div>

<!--
    Dois trabalho -- terça e quinta!
    -se os dois forem executados -> tv 50' e sorvete
    - se apenas um for executado -> TV 32' e sorvete
    - se nehum for executado -> em casa fica mais saudavel
    
-->
<form action="#" method="post">
    <div>
        <label for="t1">Trablho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1"> Executado</option>
            <option value="0"> Não Executado</option>
        </select>
    </div>
    <div>
    <label for="t2">Trablho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1"> Executado </option>
            <option value="0"> Não Executado</option>
        </select>
    </div> 
    <button>Executar</button>
</form>
<style>
    button, select{
        font-size: 1.8rem; 
    }
</style>

<?php
$trabalho1 = $_POST['t1'];
$trabalho2 = $_POST['t2'];
if (isset($_POST['t1']) && isset($_POST['t2'])){
    if($trabalho1 === "1" && $trabalho2 == "1"){
    echo "Você conseguiu cumprir os dois trabalho, e poderá comprar uma TV de 50 e tomar sorvete com sua família!<br>";
    }elseif ($trabalho1 === '1' && $trabalho2 == '0') {
    echo "Você poderá comprar uma TV de 32 e tomar sorvete com sua família.";
    }elseif ($trabalho2 === '1' && $trabalho1 === '0') {
    echo "Você poderá comprar uma TV de 32 e tomar sorvete com sua família.";
    }elseif ($trabalho1 === '0' && $trabalho2 === '0') {
    echo "Infelismente vocês não poderão comprar nehuma TV e não tomar sorvete.";
    }
}

?>