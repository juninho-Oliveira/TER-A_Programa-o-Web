<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>

<body>

    <form action="aula.php" method="GET">
        
        <fieldset >
            <label for="nome">Nome: </label>
            <input type="text" placeholder="Digite seu nome" id="nome" name="nome">
            <br />

            <label for="idade">Idade: </label>
            <input type="number" placeholder="Digite seu nome" id="idade" name="idade">

            <br />
            <input type="submit" value="Enviar">Enviar</input>
        </fieldset>

    </form>

</body>

</html>