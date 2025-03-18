<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula03 - Cliente Cadastrado</title>
</head>
<body>

    <p>
        <a href="index.php">VOLTAAAAAAAARR!!!</a>
    </p>

    <h1>Cliente Cadastrado</h1>

    <?php 
    
    // Verificar se a pagina recebeu os dados enviados via POST
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        // Receber dados e mostrar na tela
        $dados=$_POST;
        if (!empty($dados['nome'])&&
            !empty($dados['email'])&&
            !empty($dados['fone'])&&
            !empty($dados['endereco']&&
            !empty($dados['cartao']))){
            
            echo "Nome: " . $dados['nome'] . "<br>";    
            echo "Email: " . $dados['email'] . "<br>";
            echo "Telefone: " . $dados['fone'] . "<br>";
            echo "Endereço: " . $dados['endereco'] . "<br>";
            echo "Cartão: " . $dados['cartao'] . "<br>";

        }
        else echo "Preenche TUDO ANIMAL!!!";

        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

    } else{ 
        //mostrar mensagem de erro 
        echo "<h3>ATENÇÃO: Nenhum dado de Cliente foi enviado!</h3>";
    }

    ?>
    
</body>
</html>