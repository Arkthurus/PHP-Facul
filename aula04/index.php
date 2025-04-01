<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - Home</title>
</head>
<body>
    

    <h1>Aula 04 - Home</h1>

    <h2>Exemplos de Array</h2>

    <p>
        <a href="pg2.php">CADASTRAR PRODUTO</a>
    </p>

    <?php 
    
        $frutas = array("Maça", "Pera", "Laranja");

        $cidades = ["Curitiba","Salvador","DouglasLandia"];

        $cliente = ["nome" => "Rei Arthur", "idade" => 20, "Email" => "Arthur@email.com"];
    
    //Mostrar valor de apenas uma posição de um array
        echo "<p>Fruta salva na posição 1 do array 'frutas': " . $frutas[1] . "</p>" ;

    echo  "<h3>Mostrando Valores do Array cidades</h3>";

    //Utilizando laço de repetição FOR
        for ($i=0; $i < count($cidades); $i++) { 

            echo "". $cidades[$i] ."<br>";

        }


    //Utilizando laço de repetição FOREACH

    echo "<h3>Mostrando Valores do Array Cidades</h3>";

    foreach ($cidades as $cidades) {
        echo "Idades: ". $cidades ."<br>";
    }

    //Utilizando laco de repetição FOR para array associativo
    
    echo "<h3>Mostrando Valores do Array Cliente utilizando a forma COMPLETA do ForEach</h3>";

    foreach ($cliente as $indice => $valor) {
        echo ucfirst($indice) . ": ". $valor ."<br>";
    }

    ?>


</body>
</html>