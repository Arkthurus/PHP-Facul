<?php require_once "functions.php"; require_once "conection.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA ELEVEN - SALVO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <p>
        <a href="index.php">VOLTAR!!!!!!!!!!!!</a>
    </p>
    <?php 

        if (formNaoChegouPOST()) {
            echo "Preencha o Form!";
            die;
        }
        if ($errors=verificarInputVazio()) {
            foreach($errors as $errors_value ) {
                echo $errors_value;
            }
            die;
        }

        $name  = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        
        $conn = connect_bd();
        $sql  = "INSER INTO tb_clientes (name, phone, email)
                 VALUES (?,?,?)";

        $stmt = mysqli_prepare($conn, $sql);

        if (!$stmt) {die("<h3  class='alert alert-danger' role='alert' style='text-align: center; width:65vw; margin: auto'>erro na preparação da consulta. Preencha o Form novamente!</h3>");}
        
        mysqli_stmt_bind_param($stmt,"sss", $name, $phone, $email,);

        if (mysqli_stmt_execute($stmt)) {
            echo "<h3>Cliente Cadastrado com Sucesso!</h3>";
        }else echo "<h3>Erro ao Salvar: " . mysqli_stmt_error($stmt) . "</h3>";
    ?>
</body>
</html>