<?php
    session_start();

    if(isset($_POST['submit']) && !empty($_POST['login_user']) && !empty($_POST['senha']))
    {

        include_once('config.php');
        $login = $_POST['login_user'];
        $senha = $_POST['senha'];
        $senhaHash = md5($senha);
        

        $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senhaHash'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            header('Location: login.php?error=user_not_found');
            exit();
        }
        else
        {
            $row = $result->fetch_assoc();
            $_SESSION['login'] = $login;
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['nome'];
            $_SESSION['senha'] = $senhaHash;
            header('Location: forum.php');
        }
    }
    else
    {
        header('Location: login.php');
    }
    
?>
