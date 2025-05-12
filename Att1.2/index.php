<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Att 1.2 BD</title>
</head>
<body>
    <h1>LOCADORA</h1>
    <p>
        <a href="films.php">Filmes Cadastrados</a>
    </p>
    <form action="saveFilm.php" method="post">
        <label for="name">Nome do Filme:</label><br>
        <input type="text" name="name" id="name" required><br>
        
        <label for="price">Preço:</label><br>
        <input type="number" name="price" id="price" required min="0.01" step="0.01"><br>

        <label for="qtd">Quantidade em Estoque:</label><br>
        <input type="number" name="qtd" id="qtd" required min="1"><br>

        <button type="submit">Registrar Filme!</button>
    </form>
</body>
</html>