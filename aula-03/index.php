<?php
$idade = 18;

if ($idade >= 18 && $idade < 70) {
    echo '<h2>Você tem mais de ' . $idade . ' anos</h2>';
    echo "<img src='https://img.freepik.com/fotos-gratis/close-up-de-uma-arara-escarlate-de-vista-lateral-close-up-da-cabeca-da-arara-scarlate_488145-3540.jpg?t=st=1756249692~exp=1756253292~hmac=c3dedf2ac9d59f581d6820dca84b98d8267b9774ac2265508430319bb95d23c0&w=740' 
        width='150px' 
        height='200px' 
        alt='Maior de idade'/>";
} else {
    echo '<h2>Você não tem mais de 18 anos </h2>';
    echo "<img src='https://conexaoplaneta.com.br/wp-content/uploads/2021/10/dia-mundial-animais-2-conexao-planeta.jpg' 
        width='250px' 
        height='200px' 
        alt='Maior de idade'/>";
};


if ($idade >= 18 && $idade < 70) {
    echo '<h2>Você é obrigado a votar </h2>';
} else if (($idade >= 16 && $idade < 18) || $idade >= 70) {
    echo '<h2>Você não é obrigado a votar (voto opcional).</h2>';
} else {
    echo '<h2>você não pode voltar, menor que 16 anos</h2>';
}

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
    <title>form</title>
</head>

<body>
    <?php
    echo "<div style='background-color: green;'>";
    //Este bloco está no BODY
    echo "Hellor World !!!";
    echo "<br/>";
    // echo "Nome: " . $name . " Idade: " . $idade;
    echo "<h2 style='color: white;'> Nome:  $nome,  Idade: $idade</h2>";
    echo "</div>";
    ?>
</body>

</html>