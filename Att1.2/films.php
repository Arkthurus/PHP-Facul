<?php require_once "conection.php"; require_once "functions.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filme em Estoque</title>
</head>
<body>
    
    <p>
        <a href="index.php">VOLTARR!!!!!!!</a>
    </p>

    <h1>Filmes em Estoque:</h1>

    <?php

        $conn   = connect_bd();

        $query  = "SELECT * FROM tb_filme";

        $result = mysqli_query($conn, $query);

        if (!mysqli_num_rows($result)>0) {
            die("<h3>Não temos Filmes em Estoque!</h3>");
        }

        echo '<table border="2" style="border-collapse: collapse">
                <tr>
                    <th style="width: 20px;">Id</th>
                    <th style="width: 225px;">Nome</th>
                    <th style="width: 65px;">Preço</th>
                    <th style="width: 10px;">Quantidade</th>                
                </tr>';

        while ($linha = mysqli_fetch_assoc($result)) {
            echo "
            <tr>
                <td>".$linha['id']."</td>
                <td> ".$linha['name']."</td>
                <td> R$ ".$linha['price']."</td>
                <td> ".$linha['qtd']."</td>
            </tr>";
        }
        echo"</table>";
        
    ?>
    
</body>
</html>