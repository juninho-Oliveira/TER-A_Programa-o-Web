<?php
$nome = $_GET["nome"]; // metodo get
$idade = $_GET["idade"];


$nome = $_POST["nome"]; // metodo POSt
$idade = $_POST["idade"];



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula-2</title>
</head>

<body>
    <?php
    echo"<div style='background-color: green;'>";
    //Este bloco está no BODY
    echo "Hellor World !!!";
    echo "<br/>";
    // echo "Nome: " . $name . " Idade: " . $idade;
    echo "<h2 style='color: white;'> Nome:  $nome,  Idade: $idade</h2>";
    echo"</div>";
    ?>
</body>

</html>