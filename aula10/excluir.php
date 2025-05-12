<?php require_once "functions.php"; require_once "conection.php";?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula TEN - Excluir Cliente</title>
</head>
<body>
    
    <h1>Aula TEN - Excluir Cliente</h1>

    <p>
        <a href="clients.php">VOLTAAAAAAR!!!!</a>
    </p>

    <?php 
    
        if (!isset($_GET['id'])) {die("<h2>Id não recebido</h2>");}

        $id   = (int)$_GET["id"];

        $conn = connect_bd();

        $sql  = "DELETE FROM tb_clientes WHERE id = ?";

        $stmt = mysqli_prepare($conn, $sql);

        if (!$stmt) {die("<h2>Erro na preparação da consulta</h2>");}

        mysqli_stmt_bind_param($stmt, "i", $id);

        if (!mysqli_stmt_execute($stmt)) {
            echo"<h2>Erro ao excluir cliente:". mysqli_stmt_error($stmt) ."</h2>";
        }
        
        if (mysqli_affected_rows($conn) == 0) {
            die("<h2>Erro ao excluir Cliente!</h2>");
        }

        echo"<h2>Cliente Excluido com sucesso!</h2>";

        mysqli_stmt_close($stmt);

        mysqli_close($conn);

    ?>

</body>
</html>