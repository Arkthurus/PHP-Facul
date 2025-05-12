<?php require_once "validacoes.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 Medias</title>
</head>
<body>
    <h1>Aula 07 Boletim</h1>

    <?php 
        if (formNaoChegouPOST()) {
            echo "<h3>Por favor, retorne à home e preencha o Formulario!!</h3>";
            die;
        }
        $erros;
        if($erros=verificarInputVazio()) {
            foreach($erros as $erros_value ) {
                echo $erros_value;
            }
            die;
        }
        if($errors=verifyIntervaloNotas()) {
            foreach($errors as $errors_value ) {
                echo $errors_value;
            }
            die;
        }
        
        mostrarNotas();

        calcMediaBi();
        
        echo"<br>Ameeeem";
    ?>
</body>
</html>