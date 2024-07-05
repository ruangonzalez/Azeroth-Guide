<?php
include 'config.php';
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $idlogado = $_SESSION['user_id'];

    $sql = "SELECT user_id FROM forum_posts WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->bind_result($user_id);
    $stmt->fetch();
    $stmt->close();

    if ($user_id == $idlogado) {
        $sql = "DELETE FROM forum_posts WHERE id = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $stmt->close();
    }

    header('Location: forum.php');
    exit();
}
?>