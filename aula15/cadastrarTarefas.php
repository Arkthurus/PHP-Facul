<?php 
    require_once "cadeado.php";
    require_once "funcoes.php";

    if (form_nao_enviado()) {
        header("location:home.php?code=0");
        die;
    }
    if (tarefaEmBranco()) {
        header("location:home.php?code=2");
        die;
    }

    $tarefa = $_POST['tarefa'];
    $id     = $_SESSION ['id'];

    require_once 'conexao.php';

    $conn = conectar_banco();
    $sql  = "INSERT INTO tb_tarefas (tarefa, usuario_id)
             VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if (!$stmt) {
        die("<h1>FOi no 1</h1>");
        header("location:home.php?code=3");
        die;
    }

    if(!mysqli_stmt_bind_param($stmt,"si", $tarefa, $id)) {
        die("<h1>FOi no 2</h1>");
        header("location:home.php?code=3");
        die;
    }

    if(!mysqli_stmt_execute( $stmt)) {
        die("<h1>FOi no 3</h1>");
        header("location:home.php?code=3");
        die;
    }
    header("location:home.php");
    
?>