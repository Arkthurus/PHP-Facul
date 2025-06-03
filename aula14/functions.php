<?php 
    require_once "connection.php";
    
    function formNotSent() {
        return $_SERVER['REQUEST_METHOD']!= 'POST';
    }

    function blankForm(){
        return empty($_POST['email']);
    }

    function searchOrder($email){
        
        $conn  =        connect_bd();

        $sql   = "SELECT tb_clientes.name         ,      tb_clientes.email, 
                         tb_pedidos.product       ,       tb_pedidos.price
                         FROM                                   tb_pedidos
                         INNER JOIN                            tb_clientes
                         ON tb_pedidos.id_cliente = tb_clientes.id_cliente
                         WHERE tb_clientes.email  =                     ?";
                         
        $stmt = mysqli_prepare($conn, $sql);

        if (!$stmt) {
            echo "<h2>Erro na estrutura da consulta SQL</h2>". mysqli_error($conn);
            return;
        }

        if (!mysqli_stmt_bind_param( $stmt,"s", $email)) {
            echo "<h2>Erro ao associar email ao parametro da pesquisa</h2>";
            return;
        }
        mysqli_execute($stmt);

        mysqli_stmt_store_result($stmt);

        if ((mysqli_stmt_num_rows($stmt)) <= 0) {
            echo "<h2>Nenhum pedido associado ao cliente com o email: $email</h2>";
            return;
        }
        showOrder($stmt);
    }

    function showOrder($stmt) {
        mysqli_stmt_bind_result($stmt, $name, $email, $product, $price);
        echo"<h2>Pedidos do Cliente $email</h2>";
        echo"-----------------------------------------<br>";
        while (mysqli_stmt_fetch($stmt)){
            echo"Cliente: " . $name    . "<br>";
            echo"Email: "   . $email   . "<br>";
            echo"Produto: " . $product . "<br>";
            echo"Valor: R$"   . $price   . "<br>";
            echo"-----------------------------------------";
        }
    }

    function errorsTreatment() {
        if (!isset($_GET['error'])) {
            return;
        }
        $error = (int)$_GET['error'];

        switch ($error) {
            case 0:
                $erro = 'VOCÊ NÃO DEVERIA ESTAR AQUI >:(';
                break;
            case 1:
                $erro = 'Usuario ou senha incorretos!';
                break;
            case 2:
                $erro = 'PREENCHE TUDO ANIMAL!';
                break;
            case 3:
                $erro = '';
                break;
        }
        echo $erro;
    }

?>