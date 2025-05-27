<?php 
    
    function formNotSent() {
        return $_SERVER['REQUEST_METHOD']!= 'POST';
    }

    function blankForm(){
        return empty($_POST['user']) || empty($_POST['pass']);
    }
    function errorsTreatment() {
        if (!isset($_GET['error'])) {
            return;
        }
        $error = (int)$_GET['error'];

        switch ($error) {
            case 0:
                $erro = 'VOCÊ NÃO DEVERIA ESTAR AQUI >:(';
                break;
            case 1:
                $erro = 'Usuario ou senha incorretos!';
                break;
            case 2:
                $erro = 'PREENCHE TUDO ANIMAL!';
                break;
            case 3:
                $erro = '';
                break;
        }
        echo $erro;
    }

?>