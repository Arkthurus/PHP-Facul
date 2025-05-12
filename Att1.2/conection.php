<?php 
    function connect_bd() {

        $host     = 'localhost';
        $user     =      'root';
        $pass     =          '';
        $dataBank = "bd_filmes";
        
        $conn = mysqli_connect($host ,$user,$pass,$dataBank);
        if (!$conn) {exit("Erro na conexão" . mysqli_connect_error());}
        return $conn;
    }
?>