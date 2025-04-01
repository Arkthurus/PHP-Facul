<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Att Cadastro Aparelhos</title>
</head>
<body>
    <h1>Cadastro Aparelho</h1>
    <p>
        <form action="cadastro.php" method="post">
        <p>
            <label for="nome">Nome do Aparelho:</label><br>
            <input type="text" name="nome" id="nome" required min="1">
        </p>
        <p>
            <label for="consumo">Consumo Máximo do Aparelho (em Watts):</label><br>
            <input type="number" name="consumo" id="consumo" required min="1">
        </p>
        <p>
            <label for="tempo">Tempo diário que ficará ligado (em horas):</label><br>
            <input type="number" name="tempo" id="tempo" required min="1">
        </p>
        <p>
            <label for="dias">Dias que ficará ligado:</label><br>
            <input type="number" name="dias" id="dias" required min="1">
        </p>
        <p>
            <label for="kWh">Valor do KiloWatt-Hora(em R$):</label><br>
            <input type="number" name="kWh" id="kWh" required min="0.01" step="0.01">
        </p>
        <button type="submit">Cadastrar</button>
        <button type="reset">Apagar</button>
        
        </form>
    </p>
</body>
</html>