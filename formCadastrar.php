<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar uma pessoa</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <a href="index.php">Cancelar cadastro e voltar</a>
    <br>
    <form action="cadastrar.php" method="POST">

    <label for="nome">Nome: </label>
    <br>
    
    <input type="text" id="nome" name="nome">
    <br>

    <label for="idade">Idade: </label>
    <br>
    
    <input type="number" id="idade" name="idade">
    <br>
    
    <input type="submit" value="Cadastrar pessoa">

    </form>

    
    
</body>
</html>