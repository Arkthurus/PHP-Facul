<?php     session_start();
    if (!isset($_SESSION["user"]) || !isset($_SESSION["pass"])) {
        header("location:index.php?error=0");
    }

?>