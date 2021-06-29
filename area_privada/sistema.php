<?php

    session_start();

    //print_r($_SESSION);

    if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['senha'])==true)){

        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ../tela/login.php');
    }

    $logado = $_SESSION['email'];

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema | SL</title>
    <link rel="stylesheet" href="../style/sistema.css">

</head>
<body>

    <header>

        <h1>SISTEMA DO SL</h1>

        <div id="sair">
            <a href="sair.php">Sair</a>
        </div>

    </header>


    <main>

        <?php

            echo "<h1>Bem vindo! <u>$logado</u></h1>";

        ?>

    </main>

</body>
</html>