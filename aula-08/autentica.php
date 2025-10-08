<?php
    session_start();
    if(!empty($_POST["usuario"]) && !empty($_POST["senha"])) {
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        if($usuario === "junior" && $senha === "123456") {
            $_SESSION["user"] = $usuario;
            $_SESSION["email"] = "phpjunior@gmail.com";
            $_SESSION["user"] = "sim";
            echo "Autenticado com sucesso!!";
            echo "< a href='home.php'>Ir para Home</a>";
        }
        else {
            echo "Senha incorreta!";
        }
    }

    else {
        echo "Você não digitou dados! ";
        echo "<a href='login.php>Voltar</a>'";
    }
?>