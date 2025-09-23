<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula06</title>
</head>

<body>
    <?php
    $i = 15;
    $c = 0;

    /*do {
            $i++;
            echo $i . "<br/>";
        }while ($i <= 10);
 
        echo "<br/>agora vou processar o WHILE<br/>";
 
        do {
            $n++;
            echo"Do... while". $n . "<br/>";
        }while ($n <= 10);*/

    /*
            for($c; $c<=10; $c+=1) {
                $resultado = $i * $c;
                echo "$i X $c =$resultado <br/>";
            }
            */
    $resultado = 0;
    do {
        $c += 1;
        $resultado = $i * $c;
        echo "$i X $c =$resultado <br/>";
    } while ($c <= 10);
    ?>
</body>

</html>