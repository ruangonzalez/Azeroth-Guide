<?php
    session_start();
    // print_r($_SESSION);
    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('Location:login.php');
    }
    $logado = $_SESSION['login'];
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
            <div class="boxforum">
                <form action="forum.php" method="POST">
                    <div class="coisas hidden">
                        <h2>Forum</h2>
                        <div class="inputbox">
                            <label for="titulo">Título:</label><br>
                            <input type="text" id="titulo" name="titulo" required>
                        </div>
                        <div class="inputbox">
                            <label for="mensagem">Mensagem:</label><br>
                            <textarea id="mensagem" name="mensagem" required></textarea>
                        </div>
                        <button class="btn" type="submit" name="submit">Enviar</button>
                    </div>
                </form>
            </div>
            <?php
                echo "<h1>Bem vindo, . $logado</h1>";
            ?>
            <div class="botaosair">
                <a class="btn" href="logout.php">Sair</a>
            </div>
        </div>
    </body>
</html>