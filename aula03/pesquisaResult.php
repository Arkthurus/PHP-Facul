<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Pesquisa</title>
</head>
<body>
    <p>
        <a href="index.php">VOLTAAAARR!!!</a>
    </p>

    <h1>Resultado da Pesquisa</h1>

    <?php 
    
        if ($_SERVER['REQUEST_METHOD']=='GET') {

            // Recebe o nome do produto e o procura dentro de um array de produtos

            if (!empty($_GET['produto'])) {

                $produto=$_GET['produto'];

                // Criar um array de produtos

                $produtos = [
                    "Capacete do Batman para Gatos",
                    "Pista do Tubarão",
                    "Max Steel",
                    "Churrasqueira Controle Remoto",
                    "1Kg de vina",
                    "Espetinho de Gato",
                    "Xbox 720",
                    "RTX 5030Ti SUPER 3gb"
                ];

                // echo "<pre>";
                // print_r($produtos);
                // echo "</pre>";

                $encontrado = array_search($produto, $produtos);
                if ($encontrado !== false) {
                    echo "<h2>Encontrado Produto: " . $encontrado . "</h2>";
                }
                if (!empty($_GET["produto"])) {
                    echo "<h2> Por favor informe algum produto </h2>";
                }
                else echo "<h2>O termo " . $produto . "não foi encontrado.</h2>";
            }
        }
        
        else echo "<h3>O Campo Produto não pode estar em BRANCO!!!</h3>";

    ?>
    
</body>
</html>