<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['id_pessoa'])) {
    // Redireciona para a página de login se não estiver logado
    header("Location: ../views/index.html");
    exit();
}
?>