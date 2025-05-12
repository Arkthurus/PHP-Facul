<?php 

    function NoPOSTmethotForm() {
        return $_SERVER['REQUEST_METHOD'] !='POST';
        
    }
    function verifiyInput(){
        $erros = [];
        foreach($_POST as $indice => $value) {
            if ($indice == "name" && empty($value)) {
                $erros[]="Nome do Filme não pode estar vazio!<br>";
            }else if ($indice != "name") {
                if (empty($value)) {
                    $indice=="price"?$indice="Preço":$indice="Quantidade";
                    $erros[]=$indice ." não pode estar vazia!! <br>";
                    continue;
                }
                if (!is_numeric($value)) {
                $indice=="price"?$indice="Preço":$indice="Quantidade";
                $erros[]=$indice ." deve ser numero!! <br>";
                }
            }
        }
        return count($erros)>0? $erros : "";
    }
?>