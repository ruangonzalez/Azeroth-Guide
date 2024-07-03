<?php
    session_start();
    // print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['login_user']) && !empty($_POST['senha']))
    {

        include_once('config.php');
        $login = $_POST['login_user'];
        $senha = $_POST['senha'];
        $senhaHash = md5($senha);
        
        // print_r('Login: ' . $login);
        // print_r('Senha: ' . $senha);
        // print_r('Hash da Senha: ' . $senhaHash);

        $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senhaHash'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);
        
        if(mysqli_num_rows($result) < 1)
        {
            header('Location: login.php');
        
        }
        else
        {
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senhaHash;
            header('Location: forum.php');
        }
    }
    else
    {
        header('Location: login.php');
    }
    
?>
