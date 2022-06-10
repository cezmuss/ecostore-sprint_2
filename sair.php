<?php
    session_start();
    unset($_SESSION['LoginS']);
    unset($_SESSION['Senha']);
    header("Location: telaLoginComprador.php")

?>