<?php
session_start();
include 'config.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_SESSION['login']) && !empty($_POST['message'])) {
        $user_id = $_SESSION['user_id'];
        $message = $_POST['message'];
        $username = $_SESSION['username'];
        $message = $conexao->real_escape_string($message);

        $sql = "INSERT INTO forum_posts (user_id, username, message, data) VALUES (?, ?, ?, NOW())";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("iss", $user_id, $username, $message);

        if ($stmt->execute()) {
            header('Location: forum.php'); 
        } else {
            echo "Erro: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Mensagem ou sessão de usuário inválida.";
    }
} else {
    echo "Método de requisição inválido.";
}

$conexao->close();
?>
