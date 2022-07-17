<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos\CSS\style.css">
    <link rel="stylesheet" href="recursos\CSS\exercicio.css">
    <title>Exercicio</title>
</head>

<body class="exercicio">

    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercicio</h2>
    </header>
    <nav class="navegacao">
        <a href=<?=$_GET['dir'] . "/" . $_GET['file'] . ".php"?> class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                //include($_GET['dir'] . "/" . $_GET['file'] . ".php");
               //include("{$_GET['dir']}"/"{ $_GET['file']}.php")
               //include('teste\teste.php')
               //include('teste\teste.php');
                include($_GET['dir'] . "/" . $_GET['file'] . ".php") ;
            ?>

        </div>
    </main>
    <footer class="rodape">
        João Miguel ₢ <?= date('Y'); ?>
    </footer>       





</body>

</html>