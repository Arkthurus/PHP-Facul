<?php 

    function formNaoChegouPOST() {
        return $_SERVER['REQUEST_METHOD'] !='POST';
        
    }
    function verificarInputVazio(){
        $erros = [];
        foreach($_POST as $indice => $value) {
            if (empty($value)) {
                $erros[]= "$indice não pode estar vazia!! <br>";
            }

        }return count($erros)>0? $erros : "";
    }
?>