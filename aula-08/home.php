<?php
    session_star();
    if($_SESSION["ativo"] != "sim") {
        echo "Nãp permitido";
        exit();
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        echo "<p>Bem vindo(a)! ". $_SESSION["user"]. "(". $_SESSION["email"]. "</p>";
        echo "<a href='logoff.php' target='_blank'>Sair</a>";

    ?>
    
</body>
</html>