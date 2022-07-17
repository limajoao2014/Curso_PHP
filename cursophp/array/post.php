<div class="titulo">$_POST</div>
<form action="#" method="post">
    <input type="text"name="nome">
    <input type="text"name="sobrenome">
    <select name="estado">
        <option value="AC">Acre</option>
        <option value="BA">Bahia</option>
        <option value="SP">São Paulo</option>
        <option value="TO">Tocantins</option>
    </select>
    <button>Enviar</button>



</form>





<?php
echo $_POST;
print_r($_POST);
echo '<br>';
echo '<br>' .count($_POST);





?>


<style>
    form>*{
        font-size: 1.8rem;
    }


</style>