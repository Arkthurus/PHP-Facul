<?php 

    function formNaoChegouPOST() {
        return $_SERVER['REQUEST_METHOD'] !='POST';
        
    }
    function verificarInputVazio(){
        $erros = [];
        foreach($_POST as $indice => $value) {
            if ($indice == "aluno" && empty($value)) {
                $erros[]="Nome do Aluno não pode estar vazio!<br>";
            }else if ($indice != "aluno" && !is_numeric($value)) {
                $erros[]= "$indice não pode estar vazia, e deve ser numero!! <br>";
            }

        }return count($erros)>0? $erros : "";
    }

    function mostrarNotas(){
        foreach($_POST as $campo) {
            echo''.$campo.'<br>';
        }
    }


?>