<?php 
    require_once 'functions.php';
    require_once 'conection.php';

    if (formNotSent()){
        header('location:index?error=0');
        die();
    }
    if (blankForm()) {
        header('location:index.php?error=2');
        die();
    }

    $user  = $_POST['user'];
    $pass  = $_POST['pass'];

    $conn  = connect_bd();
    $query = "SELECT * FROM tb_users
              WHERE user LIKE ?
              AND
              pass LIKE ?";
    
    $stmt  = mysqli_prepare($conn, $query);

    if (!$stmt) {
        header("index.php?error=3");//erro na consulta
        die();
    }

    mysqli_stmt_bind_param($stmt,"ss", $user, $pass);

    if (!mysqli_execute($stmt)) {
        header("index.php?error=4");//erro ao exe comando
        die();
    }

    mysqli_stmt_store_result($stmt);

    $linhas = mysqli_affected_rows( $conn );

    if ($linhas<=0) {
        header("location:index.php?error=1");//user ou pass invalidos
        die();
    }

    session_start();
    $_SESSION['user'] = $user;
    $_SESSION['pass'] = $pass;

    header('location:home.php');
    
    
?>