<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - PHP</title>
</head>
<body>

    <h1>Aula03 - Pagina Principal</h1>
    
    <img src="./imgs/maxresdefault.jpg" height="400px" width="800px" alt="">
    
    <?php 

    // Include e require: metodos para incluir arquivos dentro de outros
        require_once ('form_cadastro.php');
    // Ao usar include e include, preferir usar require/include_once
    // preferencialmete usar, require
        require_once ('pesquisa.php');
    ?>

</body>
</html>