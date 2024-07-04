<?php
    session_start();
    include 'config.php';

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
                <div class="forum-header">
                    <?php
                    echo "<div class='bemvindo'> <h1>Bem vindo, $logado</h1> </div>";
                    echo "<div class='forum-titulo'> <h1>Fórum</h1> </div>";
                    ?>
                </div>
                <div class="forum-actions">
                    <form id="postForm" method="POST" action="post_message.php">
                        <textarea name="message" id="message" rows="5" placeholder="Escreva sua mensagem aqui..."></textarea>
                        <div class="action-buttons">
                            <div class="botaosair">
                                <a class="btn" href="logout.php">Sair</a>
                            </div>
                            <div class="botaoenviar">
                                <button class="btn" type="submit">Publicar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="posts">
                        <?php
                        $sql = "SELECT username, message, data FROM forum_posts ORDER BY data DESC";
                        $result = $conexao->query($sql);
                        
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<div class='post'>";
                                echo "<p class='username'>" . htmlspecialchars($row['username']) . "</p>";
                                echo "<p class='message'>" . htmlspecialchars($row['message']) . "</p>";
                                echo "<p class='timestamp'>" . htmlspecialchars($row['data']) . "</p>";
                                echo "</div>";
                            }
                        } else {
                            echo "<p>Nenhuma mensagem ainda.</p>";
                        }
                        $conexao->close();
                        ?>
                </div>
            </div>
            <?php
                echo "<div class='bemvindo'> <h1>Bem vindo, $logado</h1> </div>";
                // echo "<pre>";
                // print_r($_SESSION);
                // echo "</pre>";
            ?>
    </body>
</html>