<?php 

    function connect_bd() {

        $host     =   'localhost:3307';
        $user     =             'root';
        $pass     =                 '';
        $dataBank =          "bd_loja";
        
        $conn = mysqli_connect($host ,$user,$pass,$dataBank);
        if (!$conn) {exit("Erro na conexão" . mysqli_connect_error());}
        return $conn;
    }
?>