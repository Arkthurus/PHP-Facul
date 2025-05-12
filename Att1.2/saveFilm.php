<?php require_once "functions.php"; require_once "conection.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filme Salvo!</title>
</head>
<body>
    <p>
        <a href="index.php">VOLTAR!!!!</a>
    </p>
    <?php
        if(NoPOSTmethotForm()){
            echo "Preencha o Form!";
            die;
        }
        if($errors=verifiyInput()){
            foreach($errors as $errorsValue){
                echo $errorsValue;
            }
            die;
        }
        $name     = $_POST['name'];
        $price    = doubleval($_POST['price']);
        $QTD      = $_POST['qtd'];

        $conn     = connect_bd();
        $sql      = "INSERT INTO tb_filme (name, price, QTD)
                    VALUES (?,?,?)";

        $stmt     = mysqli_prepare($conn, $sql); 
        
        if (!$stmt) {die("erro na preparação da consulta. Preencha o Form novamente!");}

        mysqli_stmt_bind_param($stmt, "sdi", $name, $price, $QTD);

        if (mysqli_stmt_execute($stmt)) {
            echo "<h3>Filme Registrado com Sucesso!</h3>";
        }else echo "Erro ao Salvar: " . mysqli_stmt_error($stmt) . "</h3>";
    ?>
</body>
</html>