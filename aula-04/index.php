<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <style>
        .par {
            color: green;
        }

        .impar {
            color: red;
        }
    </style>
</head>

<body>

    <?php
    $c = 0;
    $f = 0;

    for ($c = $f; $c <= 100; $c++) {

        //echo "<p>Número ". $c . "</p>";
    

        if ($c % 2 == 0) {
            echo "<p class='par'>Número par " . $c . "</p>";
        } else {
            echo "<p class='impar'>Número impar " . $c . "</p>";
        }

    }


    ?>
    <p >teste</p>
</body>

</html>