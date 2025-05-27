<?php require_once 'functions.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>AULA 13 - Sist. de Login</h1>
    <h1>Informe os dados para login</h1>

    <?php 
        errorsTreatment();   
    ?>

    <form action="verify.php" method="post">
    <p>
        <label for="user">Usuario:</label>
        <input type="text" name="user" id="user" name>
    </p>
    <p>
        <label for="password">Senha:</label>
        <input type="password" name="pass" id="pass">
    </p>
    <button type="submit">logar</button>
    </form>
</body>
</html>