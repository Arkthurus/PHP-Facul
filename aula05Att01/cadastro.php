<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrado</title>
</head>
<body>

    <p>
        <a href="index.php">Voltar com carinho!!!</a>
    </p>

    <h1>Produto Cadastrado</h1>

    <?php 
    
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $dados=$_POST;
            if (!empty($dados['nome'])&&
                !empty($dados['consumo'])&&
                !empty($dados['tempo'])&&
                !empty($dados['dias']&&
                !empty($dados['kWh']))){
                
                echo "Nome: " . $dados['nome'] . "<br>";    
                echo "Consumo Max: " . $dados['consumo'] . "<br>";
                echo "Tempo ligado: " . $dados['tempo'] . "<br>";
                echo "Dias ligado(s): " . $dados['dias'] . "<br>";
                echo "kWh: " . $dados['kWh'] . "<br>";
    
            }
            else echo "Preencha todos os campos";
        }else echo "<h3>Nenhum Dado Receido</h3>";

    
        $potencia=$dados['consumo'];
        $tempo=$dados['tempo'];
        $dias=$dados['dias'];
        $Valor_kWh=$dados['kWh'];
        
        // Verificando as variaveis
        // echo "potencia: " . $potencia . "<br>";    
        // echo "tempo ligado: " . $tempo . "<br>";
        // echo "Dias ligado: " . $dias . "<br>";
        // echo "Valor kWh: " . $Valor_kWh . "<br>";

        $consumoDiario=($potencia*$tempo)/1000;
        $consumoMensal=$consumoDiario*$dias;
        $GastoMonetario=$consumoMensal*$Valor_kWh;

        echo "<h1>Consumo Diário</h1>";
        echo "<h3>Consumo Diário do Produto: " . $consumoDiario . "watts</h3>";

        echo "<h1>Consumo Mensal</h1>";
        echo "<h3>Consumo Mensal do Produto:" . $consumoMensal . "watss</h3>";

        echo "<h1>Gasto Mensal em R$</h1>";
        echo "<h3>R$" . $GastoMonetario . "</h3>";
        if ($GastoMonetario<5.0) {
            echo "<h3>Consumo Baixo</h3>";
        }
        if ($GastoMonetario>5.0 && $GastoMonetario<10.0 ) {
            echo "<h3>Consumo Moderado</h3>";
        }
        if ($GastoMonetario > 10.0) {
            echo "<h3>Consumo Elevado</h3>";
        }



    ?>

</body>
</html>