<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - Home</title>
</head>
<body>
    <h1> Aula 0-2 - PHP Página Inicial </h1>

    <?php 
    
        echo "hoy leticia né? <br>";

        $aluno = "Rei Arthur"; // STRING
        $curso = "ADS"; // STRING
        $periodo = 3; //INT

        
        
        echo "\n\tNome do Aluno: " . $aluno . "<br>"; // Conttatenação
        
        echo "\n\tCurso: " . $curso . "<br>"; // Conttatenação
        
        echo "\n\tPeríodo: $periodo<br>"; // Interpolação

    ?>

    <h2>Exemplos e Exercicios

    <ul>
        <li><a href="exemplo01.php">Exemplo 01</a></li>
        <li></li>
        <li></li>
    </ul>

    </h2>

</body>
</html>