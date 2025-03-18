<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - Exemplo 01</title>
</head>
<body>
    
    <a href="index.php">VOLTAAAAR!!!!!!!</a>
    <h1>Exemplo 01</h1>
    <p>Informe um valor Inteiro para a verificação de PAR!!!</p>
    <form action="exemplo01.php" method="post">

    <p>
        <label for="valor">Insira um valor entre 1 e 100:</label> 
        <input type="number" name="valor" min="1" max="100" required>
    </p>
    <p>
        <button type="submit">VERIFICAR!!!!!!</button>
    </p>
    </form>

    <?php 
        //verificar se o campo "valor" foi enviado
        if (!empty($_POST['valor'])) {
        //A variavel $valor recebera o conteudo recebido pelo form com nome "valor" <via POST>
        $valor = $_POST['valor'];
        if ($valor%2==0) {echo "<h3> É PAR MEU!!!!!</h3>";}
        else echo "<h3>NÃO È PAR IRMÃOO!!!!!</h3>";
    }
    ?>
    
</body>
</html>