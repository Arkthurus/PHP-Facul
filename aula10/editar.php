<?php require_once "functions.php"; require_once "conection.php"?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula TEN - Editar</title>
</head>
<body>
    
    <h1>Aula TEN - Editar</h1>

    <?php 
    
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            
            $id = $_POST['id'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];

            if (verificarInputVazio()) {
                echo '<h3>Ao editar cliente, não pode haver campos vazios!</h3>';
            }

            $conn = connect_bd();

            $query = "UPDATE tb_clientes set name=?, phone=?, email=? 
                      WHERE id=?";

            $stmt = mysqli_prepare($conn, $query);

            mysqli_stmt_bind_param($stmt,"sssi", $name, $phone, $email, $id); 

            if (mysqli_stmt_execute($stmt)) {echo "<h3>Cliente editado com sucesso!</h3>";}

            


        }else{

            if (!isset($_GET['id'])) {die("<h2>Id não recebido</h2>");}

            $id = (int)$_GET["id"];


            $conn   = connect_bd();
            $query  = "SELECT * FROM tb_clientes WHERE id=$id";
            $result = mysqli_query($conn, $query);

            if (!mysqli_num_rows($result)> 0) {die("<h2>Cliente não Localizado!</h2>"); }

                $client=mysqli_fetch_assoc($result);
                ?>

                <h2>Editando dados do Cliente</h2>
                <form action="editar.php" method="post">

                    <label for="name">Nome: <?= $client['name']?></label><br>
                    <input type="text" name="name" id="name"><br>
                    <br>

                    <label for="phone">Telemovel: <?= $client['phone']?></label><br>
                    <input type="phone" name="phone" id="phone"><br>
                    <br>

                    <label for="email">Email: <?= $client['email']?></label><br>
                    <input type="email" name="email" id="email"><br>
                    <br>

                    <input type="hidden" value="<?= $client['id']?>" name="id" id="">

                    <button type="submit">Editar</button>
                </form>
                <?php 
            


            echo '<form action="editar.php" method="post">
                    <button type="submit">Enviar</button>
                  </form>';

        }
    ?>
</body>
</html>