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
        foreach($_POST as $indice => $value) {
            echo $indice.' = '.$value.'<br>';
        }
        echo'<br>';
    }

    function verifyIntervaloNotas(){
        
        $errors = array();

        foreach($_POST as $indice => $value) {
            if ($indice != 'aluno' && ($value<0||$value>10)){
                $errors[]= "A $indice deve estar entre 0 e 10 <br>";
            }
        }
        return count($errors)> 0? $errors :""; 
    }

    function calcMediaBi(){
        
        $soma=0;
        $numMaterias=0;
        $menorNota=11;
        $maiorNota= -1;
        
        foreach ($_POST as $indice => $value) {
            
            if ($indice == 'aluno') {continue;}

            $soma += $value; 
            $numMaterias ++;
            if ($value < $menorNota) {$menorNotaF[0]=$indice;}
            if ($value > $maiorNota) {$maiorNotaF[0]=$indice;}

        }
        $media=$soma/$numMaterias;

        foreach ($menorNotaF as $indice => $value) {echo'MENOR NOTA'.'= '.$value.'<br>';}
        foreach ($menorNotaF as $indice => $value) {echo'MAIOR NOTA'.'= '.$value.'<br>';}
        echo '<br>'.'MEDIA BIMESTRAL:'.formaterNota($media).'<br>'.'<br>';
        
        if ($media>=9&&$media<=10) {echo 'Media Bimestral: A'.'<br>';}
        if ($media>=8&&$media<9) {echo 'Media Bimestral: B'.'<br>';}
        if ($media>=6&&$media<8) {echo 'Media Bimestral: C'.'<br>';}
        if ($media>4&&$media<6) {echo 'Media Bimestral: D'.'<br>'; }
        if ($media<4) {echo'Media Bimestral: E'.'<br>';}
    
    }

    function formaterNota($n){
        return number_format($n,1);
    }

?>