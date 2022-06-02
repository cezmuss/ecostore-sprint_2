<?php
    session_start();
   if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha']))
   {

        include_once('conexao.php');
        // Cria conexão
        $conn = new mysqli($servername, $username, $password, $database);

        
        // Verifica conexão
        if ($conn->connect_error) {
            die("Conexão Falhou: " . $conn->connect_error);
        }
        // Configura para trabalhar com caracteres acentuados do português
        $conn->query("SET NAMES 'utf8'");
        $conn->query('SET character_set_connection=utf8');
        $conn->query('SET character_set_client=utf8');
        $conn->query('SET character_set_results=utf8');

        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuario WHERE LoginS = '$login' and Senha = '$senha'";

        $result = $conn->query($sql);

        if(mysqli_num_rows($result)> 1)
        {
            unset($_SESSION['LoginS']);
            unset($_SESSION['Senha']);
            header('Location: telaLoginComprador.html');
        }
        else
        {
            $_SESSION['LoginS'] = $login;
            $_SESSION['Senha'] = $senha;

            header('Location: menu.html');

            /* 
            <?php
            
                session_start();
                if((!isset($_SESSION['LoginS']) == true) and (!isset($_SESSION['Senha']) == true))
                {
                    unset($_SESSION['LoginS']);
                    unset($_SESSION['Senha']);
                    header('Location: telaLoginComprador.html');
                }
                $logado = $_SESSION['LoginS'];

            ?>


            */


        }

   }
   else{
       header('Location: telaLoginComprador.html');
   }

?>