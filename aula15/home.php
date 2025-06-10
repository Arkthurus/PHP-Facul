<?php require_once 'cadeado.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 - Home</title>
</head>
<body>

    <h1>Aula 13 - Home</h1>

    <h2>Bem-vindo, <?= $_SESSION['usuario']; ?>!</h2>

    <p>
        <a href="logout.php">Logout</a>
    </p>

    <form action="cadastrarTarefas.php" method="post">
        <label for="tarefa">Nome da Tarefa: </label>
        <input type="text" name="tarefa" id="tarefa">
        <button type="submit">Cadastrar</button>
    </form>
    <?php 
        require_once "funcoes.php";
        tratar_erros();

        require_once "conexao.php";
        
        $conn = conectar_banco();   

        $id  = $_SESSION['id'];

        $sql = "SELECT id_tarefa, tarefa FROM tb_tarefas
                WHERE usuario_id = $id";

        $resultado = mysqli_query($conn, $sql);

        $linhas    = mysqli_affected_rows($conn);

        if ($linhas < 0) {die("<h3>Erro ao buscar tarefas do user. Tente novamente mais tarde</h3>");}
        if ($linhas == 0) {die("<h3>Voce n tem Tarefas cadastradas</h3>");}

        echo '<table>';

        while($tarefaAtual=mysqli_fetch_assoc($resultado)) {
            echo '<tr>';
            echo '<td>'.$tarefaAtual['tarefa'].'</td>';
            echo '<td>';
            echo '<a href="deletarTarefa.php"?id_tarefa='.$tarefaAtual['id_tarefa'].'>[X]</a>';
            echo '<td>';
        }
        
        echo'</table>';
    ?>
</body>
</html>