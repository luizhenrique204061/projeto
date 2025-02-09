<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir uma pessao</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <a href="index.php">Cancelar exclusão e voltar</a>
    <br>
    <p><?php echo "Realmente deseja excluir $_GET[nome] com $_GET[idade] anos de idade?"?></p>
    <form action="excluir.php" method="POST">

    <input type="hidden" name="codigo" value="<?php echo $_GET['codigo']; ?>">
    <input type="submit" value="Sim, excluir">

    </form>

    
    
</body>
</html>