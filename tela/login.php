<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="../style/login.css">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

</head>
<body>

    <div id="voltar">
        <a href="../index.php" alt="voltar"><i class="bi bi-arrow-left-short"></i></a>
    </div>

    <section id="container-login" class="container-section">

        <form action="../testeLogin.php" method="POST">

            <fieldset>

                <legend><b>Login de Usuário</b></legend>

                <input type="email" name="email" placeholder="Email"><br/>
                <input type="password" name="senha" placeholder="Senha"><br/>

                <input type="submit" name="submit" id="submit" value="Entrar">
              

            </fieldset>

        </form>

    </section>
    
</body>
</html>