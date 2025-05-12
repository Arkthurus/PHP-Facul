<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula NINE - HOME</title>
</head>
<body>
    
    <h1>Aula NINE - Clientes</h1>

    <p>
        <a href="clients.php">Clientes Cadastrados</a>
    </p>

    <form action="salvar.php" method="post">
    
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name"><br>

        <label for="phone">Telemóvel:</label>
        <input type="text" name="phone" id="phone"><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br>

        <button type="submit">Enviar</button>

    </form>

</body>
</html>