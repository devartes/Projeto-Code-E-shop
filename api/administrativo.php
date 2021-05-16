<?php
session_start();
if (!empty($_SESSION['id'])) {
    echo  "Olá " . $_SESSION['nome'] . ", Seja Bem-Vindo(a)!<br>";
    echo "<a href='sair.php'>Sair</a>";
} else {
    $_SESSION['msg'] = "Acesso negado!";
    header("Location: login.php");
}
