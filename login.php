<?php

if(isset($_GET['error']) && $_GET['error'] === 'user_not_found') {
    echo '<script>alert("Nenhum usuário encontrado com as informações fornecidas.");</script>';
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
            <div class="boxlogin">
                <form action="test-login.php" method="POST">
                    <div class="coisas hidden">
                        <h2>Entrar</h2>
                        <div class="inputboxlogin">
                            <label for="login_user">Login:</label><br>
                            <input type="login_user" id="login_user" name="login_user" required>
                        </div>
                        <div class="inputboxlogin">
                            <label for="senha">Senha:</label><br>
                            <input type="password" id="senha" name="senha" required>
                        </div>
                        <button class="btn" type="submit" name="submit">Entrar</button>
                    </div>
                </form>
            </div>
            <div class="footer-login">
                <footer>
                    <p>Guia de Viagem para Azeroth &copy; 2024</p>
                </footer>
        </div>
    </body>
</html> 