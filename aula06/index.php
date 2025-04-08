<?php require_once 'functions.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 - Home</title>
</head>
<body>
    
    <h1>AUla 06 - Home</h1>

    <form action="calculos.php" method="post">

        <p>
            <label for="valor1">Valor 1</label>
            <input type="number" name="valor1" id="valor1">
        </p>
        <p>
            <label for="valor2">Valor 2</label>
            <input type="number" name="valor2" id="valor2">
        </p>

        <button type="submit">Calcular</button>

    </form>

</body>
</html>