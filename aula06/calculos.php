<?php require_once 'functions.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 - Calculos</title>
</head>
<body>
    
    <h1>AUla 06 - Calculos</h1>

    <?php 
    
        if(!validarForm()){
            echo "Necessario preencher o fomr";
            die;
        }
        if (!verificarCamposVazios()) {
            echo "Os dois valores precisam ser preenchidos!";
            die;
        }
        echo"cheguei aqui via POST <br><br>";
        
        if (!verifyNum()) {
            echo "Ambos os valores precisam ser numericos! <br><br>";
            die;
        }

        $v1 = $_POST['valor1'];
        $v2 = $_POST['valor2'];
    
        $soma = $v1+$v2;
        $sub = $v1-$v2;
        $mult = $v1*$v2;
        $div = $v2==0? 0 : $v1/$v2;
    
        echo $v1 . ' + ' . $v2 . " = " . $soma . "<br>";
        echo $v1 . ' - ' . $v2 . " = " . $sub. "<br>";
        echo $v1 . ' X ' . $v2 . " = " . $mult. "<br>";
        echo $v1 . ' / ' . $v2 . " = " . $div. "<br>";


    ?>

</body>
</html>