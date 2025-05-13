<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula NINE - HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="container-fluid">
    
    <h1 style="text-align: center; padding-top: 30px; padding-bottom: 30px; font-family: Monocraft Nerd Font; background-image: url(imgs/sky.jpg); margin: 0%; color: darkgreen; text-shadow:rgba(1, 50, 32, 0.21) 7px 9px 2px">Aula ELEVEN - Clientes</h1>

    <p style="background-image: url(imgs/grass.jpg); padding: 40px; margin: 0%;">
        <a href="clients.php"><button class="minecraft-btn" style="color: aliceblue; width: 20%">Clientes Cadastrados</button></a>
    </p>
    
    <form action="salvar.php" method="post" style="background-image: url(imgs/terraFundo.jpg); height: 600px; padding-top: 100px; padding-left: 35px; padding-right: 35px;">
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label" style='font-family: Monocraft Nerd Font; color: aliceblue;'>Nome:</label>
            <div class="col-sm-10">
            <input type="text" name="name" id="name" class="form-control" style=" width:75%;font-family: Monocraft Nerd Font;">
            </div>
        </div>

        <div class="row mb-3">
            <label for="phone" class="col-sm-2 col-form-label" style='font-family: Monocraft Nerd Font; color: aliceblue;'>Telemóvel:</label>
            <div class="col-sm-10">
            <input type="text" name="phone" id="phone" class="form-control" style=" width:75%; font-family: Monocraft Nerd Font;">
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label" style='font-family: Monocraft Nerd Font; color: aliceblue;'>Email:</label>
            <div class="col-sm-10">
            <input type="email" name="email" id="email" class="form-control" style=" width:75%; font-family: Monocraft Nerd Font;">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-secondary minecraft-btn">Enviar</button>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>