<?php require_once "functions.php"; require_once "conection.php"?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula NINE - Clientes</title>
</head>
<body>
    <h1>Aula NINE - Clientes Cadastrados</h1>

    <p>
        <a href="index.php">VOLTAAAAR!!!!</a>
    </p>

    <?php 

        $conn   = connect_bd();

        $query   = "SELECT * FROM tb_clientes";

        $result = mysqli_query($conn, $query); 

        if (!mysqli_num_rows($result)>0) {
            die("<h3>Não há Clientes Cadastrados!</h3>");
        }

           
        echo '<table border="1" style="border-collapse: collapse ">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Telemóvel</th>
                    <th>E-Mail</th>
                </tr>';
            

        echo "<h3>Lista de Clientes</h3>";
        while ($linha = mysqli_fetch_assoc($result)) {
            echo "
            <tr>
                <td>".$linha['id']."</td>
                <td>".$linha['name']."</td>
                <td>".$linha['phone']."</td>
                <td>".$linha['email']."</td>
            </tr>";
        }
        echo"</table>";

    ?>
</body>
</html>