<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 Home</title>
</head>
<body>
    
    <h1>Aula 07 HOME</h1>

    <h2>Boletim Buimestral</h2>

    <form action="medias.php" method="post">

        <p>
            <label for="aluno">Aluno:</label><br>
            <input type="text" name="aluno" id="aluno">
        </p>
        <p>
            <label for="notaMAT">Nota de Matematica:</label><br>
            <input type="number" name="notaMAT" id="notaMAT" step="0.1">
        </p>
        <p>
            <label for="notaFIS">Nota de Fisica:</label><br>
            <input type="number" name="notaFIS" id="notaFIS" step="0.1">
        </p>
        <p>
            <label for="notaQUI">Nota de Quimica:</label><br>
            <input type="number" name="notaQUI" id="notaQUI" step="0.1">
        </p>
        <p>
            <label for="notaBIO">Nota de Biologia:</label><br>
            <input type="number" name="notaBIO" id="notaBIO" step="0.1">
        </p>
        <p>
            <label for="notaPORT">Nota de Portugues:</label><br>
            <input type="number" name="notaPORT" id="notaPORT" step="0.1">
        </p>
        <p>
            <label for="notaHIST">Nota de Historia:</label><br>
            <input type="number" name="notaHIST" id="notaHIST" step="0.1">
        </p> 
        <p>
            <label for="notaGEO">Nota de Geografia:</label><br>
            <input type="number" name="notaGEO" id="notaGEO" step="0.1">
        </p>
        <p>
            <label for="notaFILO">Filosofia:</label><br>
            <input type="number" name="notaFILO" id="notaFILO" step="0.1">
        </p>
        <button type="submit">Enviar</button><br>


    </form>

</body>
</html>