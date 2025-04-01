<h1>Cadastro de Cliente</h1>

    <form action="cadastrado.php" method="post">

        <p>
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" id="nome" required>
        </p>
        <p>
            <label for="email">Email:</label><br>
            <input type="text" name="email" id="email" required>
        </p>
        <p>
            <label for="fone">Telefone:</label><br>
            <input type="tel" name="fone" id="fone" required>
        </p>
        <p>
            <label for="endereco">Endereço:</label><br>
            <input type="text" name="endereco" id="endereco" required>
        </p>
        <p>
            <label for="cartao">Cartão de Crédito</label><br>
            <input type="number" name="cartao" id="cartao" required>
        </p>
        <button type="submit">Cadastrar</button>
        <button type="reset">Apagar</button>
</form>
