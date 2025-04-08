<?php 

    function validarForm(){
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    function verificarCamposVazios(){
        
        return isset($_POST['valor1']) && isset($_POST['valor2']);
    }

    function verifyNum(){
        return is_numeric($_POST['valor1']) && is_numeric($_POST['valor2']);
    }

?>