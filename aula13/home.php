<?php require_once 'lock.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Aula 13 - Home</h1>
    <h2>Bem vindo, <?= $_SESSION['user'];?></h2>
    <p>
        <a href="logout.php">LOGOOOOOOOOUT!!!!!</a>
    </p>
</body>
</html>