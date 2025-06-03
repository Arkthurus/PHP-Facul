<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA FORTIN = Relacionamento entre tables</title>
</head>
<body>
    <h1>AULA 14</h1>
    <h1>Relacionamento entre Tables</h1>
    <form action="index.php" method="post">
        <p>
            <label for="email">email</label>
            <input type="email" name="email" id="email">
        </p>
        <button type="submit">Procurar</button>
    </form>

    <?php 
        require_once "functions.php";

        if(formNotSent()){
            die("Nenhum Cliente cadastrado ao email informado!");
        }
        if (blankForm()) {
            die("Por favor, informe um Email!");
        }

        $email = $_POST["email"];

        searchOrder($email);
    ?>

</body>
</html>