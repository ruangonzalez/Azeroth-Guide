<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $login = $_POST['login_user'];
        $senha = $_POST['senha'];
        $senhaHash = md5($senha);

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,login,senha) 
        VALUES('$nome','$email','$login','$senhaHash')");
        $conexao -> close();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jacquard+12&family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
        <script src="script/script.js" defer></script>
        <title>Guia de Viagem para Azeroth</title>
    </head>
    <body>
        <div class="content">
            <div class="header">
                <header>
                    <h1>Guia de Viagem para Azeroth</h1>
                    <div class="buttons">
                        <a class="btn" id="botao-home" href="index.html">Home</a>
                        <a class="btn" id="botao-noticias" href="#container-news">News</a>
                        <a class="btn" href="forum-inicio.php">Forum</a>
                        <a class="btn" href="about.html">About</a>
                    </div>
                </header>
            </div>
            <div class="boxform">
                <form action="formulario.php" method="POST">
                    <div class="coisas hidden">
                        <h2>Registre-se</h2>
                        <div class="inputbox">
                            <label for="nome">Nome:</label><br>
                            <input type="text" id="nome" name="nome" required>
                        </div>
                        <div class="inputbox">
                            <label for="email">Email:</label><br>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="inputbox">
                            <label for="login_user">Login:</label><br>
                            <input id="login_user type="login_user" name="login_user" required>
                        </div>
                        <div class="inputbox">
                            <label for="senha">Senha:</label><br>
                            <input type="password" id="senha" name="senha" required>
                        </div>
                        <button class="btn" type="submit" name="submit" id="submit">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>