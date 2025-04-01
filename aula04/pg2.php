<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Aula 04 - Home</h1>

<h2>Exemplos de Array</h2>

<p>
    <a href="index.php">Voltar a Home</a>
</p>

<h2>Cadastro de Produto</h2>

<?php 
    
    require_once("CadastroProduto.php");

    if($_SERVER['REQUEST_METHOD']==$_POST && count($_POST)){

        $produto=$_POST;

        echo "<h3>Produto Cadastrado</h3>";
    }

?>


</body>
</html>