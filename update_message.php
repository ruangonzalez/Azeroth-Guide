<?php
include 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['editId']) && isset($_POST['editMessage'])) {
    $id = $_POST['editId'];
    $message = $_POST['editMessage'];
    $idlogado = $_SESSION['user_id'];

    $sql = "SELECT user_id FROM forum_posts WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->bind_result($user_id);
    $stmt->fetch();
    $stmt->close();
 
    if ($user_id == $idlogado) {
        $sql = "UPDATE forum_posts SET message = ? WHERE id = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param('si', $message, $id);
        $stmt->execute();
        $stmt->close();
    }

    header('Location: forum.php');
    exit();
}
?>
