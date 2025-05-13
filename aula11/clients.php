<?php require_once "functions.php"; require_once "conection.php";?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula NINE - Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
</head>
<body>

    <h1 style="text-align: center; padding-top: 30px; padding-bottom: 30px; font-family: Monocraft Nerd Font; background-image: url(imgs/sky.jpg); margin: 0%; color: darkgreen; text-shadow:rgba(1, 50, 32, 0.21) 7px 9px 2px">Aula ELEVEN - Clientes</h1>

    <p style="background-image: url(imgs/grass.jpg); padding: 40px; margin: 0%;">
        <a href="index.php"><button class="minecraft-btn" style="color: aliceblue; width: 20%; margin-right: 20px;">Home</button></a>
        <a href="clients.php"><button class="minecraft-btn" style="color: aliceblue; width: 20%">Cleintes Cadastrados</button></a>
    </p>

    

    <?php 

        $conn   = connect_bd();

        $query  = "SELECT * FROM tb_clientes";

        $result = mysqli_query($conn, $query); 

        if (!mysqli_num_rows($result)>0) {
            die("<h3>Não há Clientes Cadastrados!</h3>");
        }

           
        echo '<table class="table table-dark table-striped" style="margin: 0%;">
                <tr>
                    <th style="font-family: Monocraft Nerd Font;">Id</th>
                    <th style="font-family: Monocraft Nerd Font;">Nome</th>
                    <th style="font-family: Monocraft Nerd Font;">Telemóvel</th>
                    <th style="font-family: Monocraft Nerd Font;">E-Mail</th>
                    <th style="font-family: Monocraft Nerd Font;">Ações</th>
                </tr>';
             

        echo "<h3 style='font-family: Monocraft Nerd Font; background-image: url(imgs/terraFundo.jpg); margin: 0%;height: 100px;color: white'>Lista de Clientes</h3>";
        while ($linha = mysqli_fetch_assoc($result)) {
            echo "
            <tr>
                <td style='font-family: Monocraft Nerd Font;'>".$linha['id']."</td>
                <td style='font-family: Monocraft Nerd Font;'>".$linha['name']."</td>
                <td style='font-family: Monocraft Nerd Font;'>".$linha['phone']."</td>
                <td style='font-family: Monocraft Nerd Font;'>".$linha['email']."</td>
                <td style='font-family: Monocraft Nerd Font;'>
                    <a href=\"excluir.php?id=".$linha['id']."\">Excluir</a> | 
                    <a href=\"editar.php?id=".$linha['id']."\">Editar</a>
                </td>
            </tr>";
        }
        echo"</table>";
        echo "<h1 style='background-image: url(imgs/fullTerra.jpg); height: 300px; margin: 0%'>.</h1>"

    ?>
</body>
</html>